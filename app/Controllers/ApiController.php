<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\UsersModel;
use App\Models\LivresModel;
use App\Models\AuteurModel;
use App\Models\EcrireModel;
use CodeIgniter\HTTP\Request;
use Config\Security;
//defined('BASEPATH') OR exit('No direct script access allowed');       


class ApiController extends BaseController
{
    public function __construct()
    {
        helper('url');
        helper('html');
        helper('form');
        /*   if(!$this->isAdminConnect())
        {
            return $this->response
            ->setStatusCode(401)
            ->setContentType('application/json')
            ->setBody(json_encode(['data' =>"Error: not autorisation "]));
        }*/
    }

    public function isAdmin()
    {
        if (!$this->isAdminConnect()) {
            return $this->response
                ->setStatusCode(401)
                ->setContentType('application/json')
                ->setBody(json_encode(['data' => "Error: not autorisation "]));
        }
    }


    public function data()
    {

        $data = array(
            'labels' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'),
            'data' => array(15, 5, 8)
        );
        return $this->response
            ->setStatusCode(200)
            ->setContentType('application/json')
            ->setBody(json_encode($data));
    }

    public function CreateBook()
    {

        $this->isAdmin();


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
            $nb = (int)$post['nb_exemplaire'] +  $books[0]->id_livre;
            $db->table('livre')->where('id_livre', $books[0]->id_livre)->update(['nb_exemplaire' => $nb]);
        }


        return $this->response
            ->setStatusCode(201)
            ->setContentType('application/json')
            ->setBody(json_encode(['data' => "ok"]));

        /*    $model2 = new LivresModel;
            $data['livres'] = $model2->getAll();
            $data['navLinkActive'] = 'books';
            return $this->render('books', $data, 'Admin/','templates/headerAdmin',"templates/footerAdmin");*/
    }


    public function getCsrf()
    {
        $this->isAdmin();
        $security = \Config\Services::security();
        $token = $security->getCSRFTokenName();
        $hash = $security->getCSRFHash();

        return $this->response->setJSON([
            'token' => $token,
            'hash' => $hash
        ]);
    }


    public function getUser()
    {

        $this->isAdmin();
        $request = \Config\Services::request();
        $post = $request->getPost();
        $categorie = (int)$post['categorie'];
        $search = $post['search'];
        $db = \Config\Database::connect();
        if ($categorie === 1) {
            // search by matricule
            $builder = $db->table('users');
            $builder->like('matricule', $search);
            $query = $builder->get();
            $student = $query->getResult();
            if (!empty($student)) {
                $query2 = $db->table('filiere')->where('id_filiere', $student[0]->id_filiere)->get();
                $filiere = $query2->getResult();
                $student[0]->id_filiere = $filiere[0]->libelle;
            }
            return $this->response
                ->setStatusCode(200)
                ->setContentType('application/json')
                ->setBody(json_encode(['data' => $student]));
        } else {
            // search by nom
            $db = \Config\Database::connect();
            $builder = $db->table('users');
            $builder->like('nom', $search);
            $query = $builder->where("type", 'Enseignant')->get();
            $teacher = $query->getResult();

            return $this->response
                ->setStatusCode(200)
                ->setContentType('application/json')
                ->setBody(json_encode(['data' => $teacher]));
        }
    }

    public function getBook()
    {
        $this->isAdmin();
        $request = \Config\Services::request();
        $model  = new LivresModel();
        $post = $request->getPost();
        $search = $post['search-book'];
        $db = \Config\Database::connect();
        $builder = $db->table('livre');
        $builder->like('nom', $search);
        $query = $builder->get();


        $book = $query->getResult();



    $id = (int)$request->getPost("id_users");

        $query3 = $db->table('prendre')->where('id_users', (int)$id)->where("id_livre" ,(int) $book[0]->id_livre )->get();
        $pris = $query3->getResult();

        if(!empty($pris))
        {
            // livre a remettre
            $book[0]->status = 0;
        }else{ 
            // livre a prendre
            $book[0]->status = 1;
        }


        $book[0]->nb_exemplaire = ( (int)$book[0]->nb_exemplaire - (int)$model->getAvailaible($book[0]->id_livre));
        $book[0]->id_categorie =  $model->getCatName((int)$book[0]->id_categorie);
       $data = [1 => "Albanais",
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
       207 => "Xhosa",];

       $book[0]->langue = $data[$book[0]->langue];

        return $this->response
            ->setStatusCode(200)
            ->setContentType('application/json')
            ->setBody(json_encode(['data' => $book]));
    }

    public function borrow()
    {
        $this->isAdmin();
        
      /*  $request = \Config\Services::request();
        $post = $request->getPost();*/
        return $this->response
        ->setStatusCode(200)
        ->setContentType('application/json')
        ->setBody(json_encode(['data' => "Ok"]));

    }
}
