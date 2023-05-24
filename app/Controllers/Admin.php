<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\UsersModel;

use App\Models\LivresModel;
use App\Models\PrendreModel;

use App\Models\AuteurModel;
use App\Models\EcrireModel;

class Admin extends BaseController
{


    protected $Author = "mamakemrosly@gmail.com";


    public function __construct()
    {
        helper('url');
        helper('html');
        helper('form');
        if (!$this->isAdminConnect()) {
            return redirect()->to(base_url() . "/login");
        }
    }

    public function isAdmin()
    {
        if (!$this->isAdminConnect()) {
            return redirect()->to(base_url() . "/login");
        }
    }

    public function login()
    {
        $data['navLinkActive'] = 'admin';
        $session = \Config\Services::session();
        //  var_dump($_SESSION);

        if (!$this->isAdminConnect()) {
            if (!empty($_POST)) {
                // back-end here (traite form data )
                $model = new AdminModel;
                $post = $_POST;
                $username = $post['username'];
                $password = $post['password'];
                $user = $model->getAdmin($username);
                //  $this->dd($user);
                if ($user != null) {
                    if (!password_verify($password, $user['password'])) {
                        $data['authentification-errors'] = "Invalid password or username";
                        return $this->render('login', $data, 'Auth/');
                    } else {
                        $_SESSION['admin'] = $user;
                        $_SESSION['Author'] = "mamakemrosly@gmail.com";
                        return redirect()->to(base_url() . "/dashboard");
                        //  return $this->render('dashboard', $data, 'Admin/','templates/headerAdmin',"templates/footerAdmin");
                    }
                } else {
                    $data['authentification-errors'] = "User doesn't exist";
                    return $this->render('login', $data, 'Auth/');
                }
            } else {
                return $this->render('login', $data, 'Auth/');
            }
        }

        // link actif a mettre en couleur
        return redirect()->to(base_url() . "/dashboard");
    }


    public function dashboard()
    {

        if ($this->isAdminConnect()) {
            $data['navLinkActive'] = 'home';
            $db = \Config\Database::connect();
            $rate = [];
            $tmp = [];

            $query = $db->table('users')->where('type', 'Etudiant')->get();
            $tmp['name'] = "student";
            $tmp['value'] = count($query->getResult());
            $rate[] = $tmp;

            $query2 = $db->table('users')->where('type', 'Enseignant')->get();
            $tmp['name'] = "teacher";
            $tmp['value'] = count($query2->getResult());
            $rate[] = $tmp;


            $query3 = $db->table('users')->get();
            $tmp['name'] = 'members';
            $tmp['value'] = count($query3->getResult());
            $rate[] = $tmp;


            $query4 = $db->table('prendre')->get();
            $tmp['name'] = 'borrowBook';
            $tmp['value'] = count($query4->getResult());
            $rate[] = $tmp;

            $db = \Config\Database::connect();
            $query = $db->query('SELECT SUM(nb_exemplaire) as total FROM livre');
            $row = $query->getRow();
            //      echo 'Nombre total de livres: '.$row->total;
            $tmp['name'] = 'allBook';
            $tmp['value'] = $row->total;
            $rate[] = $tmp;

            $builder = $db->table('prendre');
            $builder->where('NOW() > date_expected_return');
            $tmp['name'] = 'notReturnBook';
            $tmp['value'] = count($builder->get()->getResult());
            $rate[] = $tmp;

            $currentMonth = date('Y-m');

            // Obtenir le nombre de jours dans le mois courant
            $daysInMonth = date('t', strtotime($currentMonth));
            $usersModel = new UsersModel();

            // Initialiser les tableaux avec des compteurs à zéro pour chaque jour
            $userCountPerDay = array_fill(1, $daysInMonth, 0);
            $daysArray = range(1, $daysInMonth);

            // Récupérer les utilisateurs créés pendant le mois courant
            $users = $usersModel
                ->select('id_users, create_at')
                ->where('DATE_FORMAT(create_at, \'%Y-%m\') =', $currentMonth)
                ->get()->getResult();

            // Parcourir le résultat et incrémenter le compteur pour chaque jour
            foreach ($users as $user) {
                $day = date('j', strtotime($user->create_at));
                $userCountPerDay[$day]++;
            }

            // Créer le tableau final
            $result = [
                // 'users' => $users,
                'counts' => $userCountPerDay,
                'days' => $daysArray
            ];

            // Afficher le résultat
            // $this->d($result);


            $data['graph'] = $result;
            $data['rate'] = $rate;

            return $this->render('dashboard', $data, 'Admin/', 'templates/headerAdmin', "templates/footerAdmin");
        } else {
            return redirect()->to(base_url() . "/login");
        }
    }

    public function members($members)
    {


        if (!$this->isAdminConnect()) {
            return redirect()->to(base_url() . "/login");
        }

        $members = ucfirst($members);
        $model = new UsersModel;


        $data['navLinkActive'] = 'members/' . $members;

        if ($members === "Students") {


            if (!empty($_GET)) {
                $cat = (int)$_GET['cat'];
                $search = $_GET['search'];
                switch ($cat) {
                    case 0:
                        $data['users'] = $model->getStudents();
                        break;

                    case 1:
                        $model =  new UsersModel();
                        $result = $model->getPrendreUsersLike($search);
                        $users = [];
                        // $this->d($result);
                        foreach ($result as $value) {
                            $user = $model->getStudent((int)$value->id_users, $search);
                            $users[] = $user;
                        }
                        $users = $model->removeDuplicates($users);
                        $data['users'] = $users;
                        break;
                    case 2:
                        $model =  new UsersModel();
                        $result = $model->getPrendreUsersNoBack($search);
                        $users = [];
                        // $this->d($result);
                        foreach ($result as $value) {
                            $user = $model->getStudent((int)$value->id_users, $search);
                            $users[] = $user;
                        }
                        $users = $model->removeDuplicates($users);
                        $data['users'] = $users;
                        break;

                    default:
                        $data['users'] = $model->getStudents();

                        break;
                }
            } else {
                $data['users'] = $model->getStudents();
            }



            return $this->render('students', $data, 'Admin/', 'templates/headerAdmin', "templates/footerAdmin");
        } else {

            if (!empty($_GET)) {
                $cat = (int)$_GET['cat'];
                $search = $_GET['search'];
                // var_dump($_GET);
                switch ($cat) {
                    case 0:
                        $data['users'] = $model->getTeachers();
                        break;

                    case 1:
                        $model =  new UsersModel();
                        $result = $model->getPrendreUsersLike2($search);
                        $users = [];
                      //   $this->d($result);
                        foreach ($result as $value) {
                            $user = $model->getTeacher((int)$value->id_users, $search);
                            $users[] = $user;
                        }
                     //   $this->d((int)$value->id_users);
                        $users = $model->removeDuplicates($users);
                        $data['users'] = $users;
                        break;
                    case 2:
                        $model =  new UsersModel();
                        $result = $model->getPrendreUsersNoBack2($search);
                        $users = [];
                        // $this->d($result);
                        foreach ($result as $value) {
                            $user = $model->getTeacher((int)$value->id_users, $search);
                            $users[] = $user;
                        }
                        $users = $model->removeDuplicates($users);
                        $data['users'] = $users;
                        break;

                    default:
                        $data['users'] = $model->getTeachers();
                        break;
                }
            } else {
                $data['users'] = $model->getTeachers();
            }
            return $this->render('teachers', $data, 'Admin/', 'templates/headerAdmin', "templates/footerAdmin");
        }
    }

    public function caisse()
    {

        if (!$this->isAdminConnect()) {
            return redirect()->to(base_url() . "/login");
        }
        $jsonFile = APPPATH . '../public/assets/js/language.json';
        $json = file_get_contents($jsonFile);
        $languages = json_decode($json, true);




        $data['navLinkActive'] = 'sell';
        return $this->render('caisse', $data, 'Admin/', 'templates/headerAdmin', "templates/footerAdmin");
    }


    public function putBorrow()
    {
        # code...
        var_dump($_GET);
        $request = \Config\Services::request();
        $csrf_test_name = $request->getGet('csrf_test_name');
        $id_u = (int)$request->getGet('id');
        var_dump($id_u);
        $id_livre = (int)$request->getGet('id_livre');
        $session = \Config\Services::session();
        $idAdmin = (int) $_SESSION['admin']['id_admin'];
        $model = new PrendreModel();
        $date = new \DateTime();
        $now = $date->format('Y-m-d') . " 00:00:00";
        $date->modify('+2 weeks');
        $jour = $date->format('Y-m-d') . " 00:00:00";
        $this->d([
            'id_users' => $id_u,
            'id_livre' => $id_livre,
            'id_admin' => $idAdmin,
            'date_return' => "0000-00-00",
            'date_taken' => $now,
            'date_expected_return' => $jour
        ]);
        // $model->insertValues((int)$id_livre,(int)$id_u,(int)$idAdmin,'0000-00-00 00:00:00',$now,$jour);
        $model->save([
            'id_users' => $id_u,
            'id_livre' => $id_livre,
            'id_admin' => $idAdmin,
            'date_return' => "0000-00-00 00:00:00",
            'date_taken' => $now,
            'date_expected_return' => $jour
        ]);

        return redirect()->to(base_url() . "/dashboard/librarian");
    }



    public function putReturn()
    {
        # code...
     //   var_dump($_GET);
        $request = \Config\Services::request();
        $csrf_test_name = $request->getGet('csrf_test_name');
        $id_u = (int)$request->getGet('id');
     //   var_dump($id_u);
        $id_livre = (int)$request->getGet('id_livre');
        $session = \Config\Services::session();
        $idAdmin = (int) $_SESSION['admin']['id_admin'];
        $model = new PrendreModel();
        $date = new \DateTime();
        $now = $date->format('Y-m-d');
        $date->modify('+2 weeks');
        $jour = $date->format('Y-m-d') . " 00:00:00";
        $db = \Config\Database::connect();


        $query = $db->table('prendre')->where('id_livre', $id_livre)->where('id_users', $id_u)->get();
        $u= $query->getResult()[0];

        $d =  $this->compareDates($now,$u->date_expected_return);
        if($d)
        {

            $q = $db->table('users')->where('id_users', $id_u)->get();
            $user = $q->getResult()[0];
            $point =(int) $user->point - 3;
            $db->table('users')->where('id_users',$id_u)->update(['point', $point]);
        }
        //var_dump($d);
        $db->table('prendre')->where('id_livre', $id_livre)->where('id_users', $id_u)->delete();
        return redirect()->to(base_url() . "/dashboard/librarian");
    }
  
    public function compareDates($date1, $date2) {
        $timestamp1 = strtotime($date1);
        $timestamp2 = strtotime($date2);
        return $timestamp1 > $timestamp2;
    }
    

    public function books()
    {


        if (!$this->isAdminConnect()) {
            return redirect()->to(base_url() . "/login");
        }

        if (!empty($_GET)) {
            $cat = (int)$_GET['cat'];
            $search = $_GET['search'];
            $model = new LivresModel;
            switch ($cat) {
                case 0:
                    $data['livres'] = $model->getAll();

                    break;

                default:

                    $result = $model->getLivreLike2($search, $cat);
                    //  $this->d($result);
                    $livre = [];
                    foreach ($result as $value) {
                        $livre = $model->getOne((int)$value->id_livre);
                        $livres[] = $livre;
                    }
                    //   $this->d($livre);
                    $livres = $model->removeDuplicates($livre);
                    if(!empty($livre))
                    {
                        $d[] = $livre;
                    }else{
                        $d = [];
                    }
                  
                    $data['livres'] = $d;
                    break;
            }
        } else {
            $model = new LivresModel;
            $data['livres'] = $model->getAll();
        }

        $data['navLinkActive'] = 'books';
        return $this->render('books', $data, 'Admin/', 'templates/headerAdmin', "templates/footerAdmin");
    }
    public function admin()
    {


        if (!$this->isAdminConnect()) {
            return redirect()->to(base_url() . "/login");
        }

        $data['navLinkActive'] = 'admin';
        return $this->render('admin', $data, 'Admin/', 'templates/headerAdmin', "templates/footerAdmin");
    }

    public function logout()
    {
        //  backend logout here
        if (!$this->isAdminConnect()) {
            return redirect()->to(base_url() . "/login");
        }
        $session = \Config\Services::session();
        unset($_SESSION['admin']);
        // redirection to login page
        return redirect()->to(base_url() . "/dashboard");
    }

    public function CreateBook()
    {


        if (!$this->isAdminConnect()) {
            return redirect()->to(base_url() . "/login");
        }
        $request = \Config\Services::request();
        $post['nom'] = $request->getPost('Book-name');
        $post['date_publication']  = $request->getPost('date');
        $post['nb_exemplaire']  = (int)$request->getPost('number');
        $post['langue'] = $request->getPost('langue');
        $post['id_categorie']  = (int) $request->getPost('categorie');
        $post['resume'] = $request->getPost('resume');
        $auteur = $request->getPost('auteur');
        //$this->dd($_POST);
        $db = \Config\Database::connect();
        $query = $db->table('livre')->where('nom', $post['nom'])->where('date_publication',  $post['date_publication'])->get();
        $books = $query->getResult();

        if (empty($books)) {
            // insert book and author
            $query = $db->table('auteur')->where('nom', $auteur)->get();
            $bdAuteur = $query->getResult();

            if (empty($bdAuteur)) {
                // new author
                $modelAuteur = new AuteurModel();
                $modelAuteur->save([
                    'nom' => $auteur,
                    'prenom' => 'none',
                    'pseudo' => 'none',
                    'date_naissance' => '0000-00-00'
                ]);
                $modelLivre = new LivresModel();
                $nb = (int) $post['nb_exemplaire'];
                $idC =  (int) $post['id_categorie'];
                $r = $modelLivre->save([
                    'nom' => $post['nom'],
                    'date_publication' => $post['date_publication'],
                    'nb_exemplaire' => $nb,
                    'langue' => $post['langue'],
                    'id_categorie' => $idC,
                    'resume' => $post['resume']
                ]);


                $modelEcrire = new EcrireModel();

                $query = $db->table('livre')->where('nom', $post['nom'])->where('date_publication',  $post['date_publication'])->get();
                $lastBook = $query->getResult();
                $query = $db->table('auteur')->where('nom', $auteur)->get();
                $lastAuteur = $query->getResult();

                $modelEcrire->save([
                    'id_auteur' => $lastAuteur[0]->id_auteur,
                    'id_livre' => $lastBook[0]->id_livre
                ]);
            } else {
                // old author
                $modelEcrire = new EcrireModel();
                $modelLivre = new LivresModel();
                $idC =  (int) $post['id_categorie'];
                $r = $modelLivre->save([
                    'nom' => $post['nom'],
                    'date_publication' => $post['date_publication'],
                    'nb_exemplaire' => $post['nb_exemplaire'],
                    'langue' => $post['langue'],
                    'id_categorie' => $idC,
                    'resume' => $post['resume']
                ]);
                $query = $db->table('livre')->where('nom', $post['nom'])->where('date_publication',  $post['date_publication'])->get();
                $lastBook = $query->getResult();

                $modelEcrire->save([
                    'id_auteur' => $bdAuteur[0]->id_auteur,
                    'id_livre' => $lastBook[0]->id_livre
                ]);
            }
        } else {
            // add
            $nb = (int)$post['nb_exemplaire'] +  $books[0]->nb_exemplaire;

            $db->table('livre')->where('id_livre', $books[0]->id_livre)->update(['nb_exemplaire' => $nb]);
        }


        /*  return $this->response
            ->setStatusCode(201)
            ->setContentType('application/json')
            ->setBody(json_encode(['data' =>var_dump($post)]));*/

        $model2 = new LivresModel;
        $data['livres'] = $model2->getAll();
        $data['navLinkActive'] = 'books';
        return $this->render('books', $data, 'Admin/', 'templates/headerAdmin', "templates/footerAdmin");
    }




    public function getBook()
    {
        helper('form');
        $request = \Config\Services::request();
        $model  = new LivresModel();
        // var_dump($_POST);
        $post = $request->getPost();
        $search = $post['search'];
        $db = \Config\Database::connect();
        $builder = $db->table('livre');
        $builder->like('nom', $search);
        $query = $builder->get();


        $book = $query->getResult();

        if (empty($book)) {
            $data['book'] = $book;
            $data['navLinkActive'] = 'consult';
            return $this->render('consult', $data);
        }




        $query3 = $db->table('prendre')->where("id_livre", (int) $book[0]->id_livre)->get();
        $pris = $query3->getResult();

        if (!empty($pris)) {
            // livre a remettre
            $book[0]->status = 0;
        } else {
            // livre a prendre
            $book[0]->status = 1;
        }


        $book[0]->nb_exemplaire = ((int)$book[0]->nb_exemplaire - (int)$model->getAvailaible($book[0]->id_livre));
        $book[0]->id_categorie =  $model->getCatName((int)$book[0]->id_categorie);

        $dataL = [
            1 => "Albanais",
            2 => "Allemand",
            3 => "Afrikaans",
            4 => "Araona",
            5 => "Azéri",
            6 => "Amazigh",
            7 => "Arménien",
            8 => "Aymara",
            9 => "Anglais",
            10 => "Arabe",
            11 => "Bengali",
            12 => "Bulgare",
            13 => "Bésiro",
            14 => "Bichelamar",
            15 => "Biélorusse",
            16 => "Birman",
            17 => "Catalan",
            18 => "Coréen",
            19 => "Croate",
            20 => "Cambodgien",
            21 => "Chinois",
            22 => "Danois",
            23 => "Espagnol",
            24 => "Finnois",
            25 => "Français",
            26 => "Japonais",
            27 => "Portugais",
            28 => "Russe",
            29 => "Guarani",
            30 => "Grec",
            31 => "Hongrois",
            32 => "Italien",
            33 => "Kikongo",
            34 => "Kiswahili",
            35 => "Lingala",
            36 => "Malais",
            37 => "Mongol",
            38 => "Néerlandais",
            39 => "Occitan",
            40 => "Ourdou",
            41 => "Persan",
            42 => "Quechua",
            43 => "Roumain",
            44 => "Samoan",
            45 => "Serbe",
            46 => "Sesotho",
            47 => "Slovaque",
            48 => "Slovène",
            49 => "Suédois",
            50 => "Tamoul",
            51 => "Turc",
            52 => "Canichana",
            53 => "Cavineña",
            54 => "Cayubaba",
            55 => "Chácobo",
            56 => "Chichewa",
            57 => "Chimane",
            58 => "Créole de Guinée-Bissau",
            59 => "Créole haïtien",
            60 => "Créole seychellois",
            61 => "Divehi",
            62 => "Dzongkha",
            63 => "Ese 'ejja",
            64 => "Estonien",
            65 => "Éwé",
            66 => "Fidjien",
            67 => "Filipino",
            68 => "Géorgien",
            69 => "Gilbertin",
            70 => "Guarasu'we",
            71 => "Guarayu",
            72 => "Hébreu",
            73 => "Hindi",
            74 => "Hindi des Fidji",
            75 => "Hiri motu",
            76 => "Indonésien",
            77 => "Irlandais",
            78 => "Islandais",
            79 => "Itonama",
            80 => "Kallawaya",
            81 => "Kabiyè",
            82 => "Kazakh",
            83 => "Khmer",
            84 => "Kirghiz",
            85 => "Kirundi",
            86 => "Lao",
            87 => "Néo-zélandaise",
            88 => "Papouasienne",
            89 => "Latin",
            90 => "Leko",
            91 => "Letton",
            92 => "Lituanien",
            93 => "Luxembourgeois",
            94 => "Macédonien",
            95 => "Machineri",
            96 => "Malgache",
            97 => "Maltais",
            98 => "Maori",
            99 => "Maori des Îles Cook",
            100 => "Maropa",
            101 => "Marshallais",
            102 => "Mirandais",
            103 => "Mojeño-Trinitario",
            104 => "Mojeño-Ignaciano",
            105 => "Monténégrin",
            106 => "Moré",
            107 => "Mosetén",
            108 => "Movima",
            109 => "Nauruan",
            110 => "Ndébélé du Transvaal",
            111 => "Népalais",
            112 => "Norvégien",
            113 => "Ouzbek",
            114 => "Pacahuara",
            115 => "Pachto",
            116 => "Paluan",
            117 => "Polonais",
            118 => "Puquina",
            119 => "Sango",
            120 => "Shikomor",
            121 => "Shona",
            122 => "Shuar",
            123 => "Sindebele",
            124 => "Singhalais",
            125 => "Sirionó",
            126 => "Somali",
            127 => "Sotho du Nord",
            128 => "Sotho du Sud",
            129 => "Tacana",
            130 => "Tadjik",
            131 => "Tamazight",
            132 => "Tapiete",
            133 => "Tchèque",
            134 => "Tétoum",
            135 => "Tigrinya",
            136 => "Thaï",
            137 => "Tok pisin",
            138 => "Tongien",
            139 => "Toromona",
            140 => "Turkmène",
            141 => "Tuvaluan",
            142 => "Ukrainien",
            143 => "Uru-Chipaya",
            144 => "Vietnamien",
            145 => "Wichi",
            146 => "Yaminahua",
            147 => "Yuki",
            148 => "Yaracaré",
            149 => "Zamuco",
            150 => "Zoulou",
            151 => "Adyguéen",
            152 => "Agul",
            153 => "Altaï",
            154 => "Assamais",
            155 => "Avar",
            156 => "Bachkir",
            157 => "Bas saxon",
            158 => "Basque",
            159 => "Bouriate",
            160 => "Cantonais",
            161 => "Carolinien",
            162 => "Chamorro",
            163 => "Darguine",
            164 => "Erzya",
            165 => "Galicien",
            166 => "Gallois",
            167 => "Gwich'in",
            168 => "Hawaïen",
            169 => "Iakoute",
            170 => "Ingouche",
            171 => "Inuinnaqtun",
            172 => "Inuktitut",
            173 => "Kabarde",
            174 => "Kalmouk",
            175 => "Karatchaï-balkar",
            176 => "Khakasse",
            177 => "Komi",
            178 => "Koumyk",
            179 => "Lak",
            180 => "Lezghien",
            181 => "Mannois",
            182 => "Mari",
            183 => "Moksa",
            184 => "Nogaï",
            185 => "Occitan (aranais)",
            186 => "Ossète",
            187 => "Oudmourte",
            188 => "Ouïghour",
            189 => "Romanche",
            190 => "Routoul",
            191 => "Ruthène",
            192 => "Same",
            193 => "Sorabe",
            194 => "Swati",
            195 => "Tabassaran",
            196 => "Tat",
            197 => "Tatare",
            198 => "Tchétchène",
            199 => "Tchouvache",
            200 => "Tibétain",
            201 => "Tobi",
            202 => "Touvain",
            203 => "Tsakhur",
            204 => "Tsonga",
            205 => "Tswana",
            206 => "Venda",
            207 => "Xhosa",
        ];


        foreach ($book as  $value) {
            $value->langue = $dataL[$value->langue];
        }
        $data['book'] = $book;
        $data['navLinkActive'] = 'consult';
        return $this->render('consult', $data);
    }
}
