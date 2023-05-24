<?php

namespace App\Controllers;

use App\Models\UsersModel;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class Users extends BaseController
{

    public function teachersRegisted()
    {
        helper('url');
        helper('html');
        helper('form');

        // back-end here
        $post = $_POST;
        $data['navLinkActive'] = 'registed';
      
        if (!empty($_POST)) {

            //   return view('signup');  
            $rules = [
                'password'  => ['rules' => 'required'],
                'passwordConf' =>  ['rules' => 'required|matches[password]'],
                'email' => [
                    'rules'  => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                        'valid_email' => 'This email address is already in use',
                    ],
                ],
          
            ];


            if( ($post['code'] != '123456789')){
                $data['authentification-errors'] = "Code is invalid  ";
                return $this->render('teachersRegisted', $data, 'Auth/');
            }

            if ( (!$this->validateData($post, $rules))  ) {
                $data['authentification-errors'] = "Something is wrong  ";
                return $this->render('teachersRegisted', $data, 'Auth/');
            }
            $model  = new UsersModel();
            $Now = new \DateTime('now');
            // Enseignant
            $post['point'] = 12;
           
            unset($post['passwordConf']);
            $post['password'] = password_hash($post['password'], PASSWORD_BCRYPT);
            $post['type'] = 'Etudiant';
            $post['create_at'] = $Now->format('Y-m-d H:i:s');
            //    $model->insert_user($post);

            $model->insert([
                "password" =>  $post['password'],
                "prenom" => $post['lastname'],
                "nom" => $post['fristname'],
                "email" => $post['email'],
                "sexe" => $post['sexe'],
                "date_naissance" => $post['date_naissance'],
                "id_niveau" => 7,
                "id_filiere" =>16,
                "sexe" => $post['sexe'],
                "type" => 'Enseignant',
                "point" => 12,
                "create_at" =>  $Now->format('Y-m-d H:i:s'),
            ]);
            $data['authentification-succes'] = "Account created";
            return $this->render('teachersRegisted', $data, 'Auth/');
        }




        // link actif a mettre en couleur
        return $this->render('teachersRegisted', $data, 'Auth/');
    }

    public function studentsRegisted()
    {
        helper('url');
        helper('html');
        helper('form');

        // back-end here
        $post = $_POST;
        $data['navLinkActive'] = 'registed';

        if (!empty($_POST)) {
            //   return view('signup');  
            $rules = [
                'password'  => ['rules' => 'required'],
                'matricule'  => ['rules' => 'required|is_unique[users.matricule]'],
                'passwordConf' =>  ['rules' => 'required|matches[password]'],
                'email' => [
                    'rules'  => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                        'valid_email' => 'This email address is already in use',
                    ],
                ],
            ];

            if (!$this->validateData($post, $rules)) {
                $data['authentification-errors'] = "Something is wrong with you information";

                return $this->render('studentsRegisted', $data, 'Auth/');
            }
            $model  = new UsersModel();
            $Now = new \DateTime('now');
            // Enseignant
            $post['point'] = 12;
            unset($post['passwordConf']);
            $post['password'] = password_hash($post['password'], PASSWORD_BCRYPT);
            $post['type'] = 'Etudiant';
            $post['create_at'] = $Now->format('Y-m-d H:i:s');
            //    $model->insert_user($post);

            $model->insert([
                "password" =>  $post['password'],
                "prenom" => $post['lastname'],
                "nom" => $post['fristname'],
                "matricule" => $post['matricule'],
                "email" => $post['email'],
                "sexe" => $post['sexe'],
                "date_naissance" => $post['date_naissance'],
                "id_niveau" => $post['niveau'],
                "id_filiere" => $post['filiere'],
                "sexe" => $post['sexe'],
                "type" => 'Etudiant',
                "point" => 12,
                "create_at" =>  $Now->format('Y-m-d H:i:s'),
            ]);
            $data['authentification-succes'] = "Account created";
            return $this->render('studentsRegisted', $data, 'Auth/');
        }




        // link actif a mettre en couleur
        return $this->render('studentsRegisted', $data, 'Auth/');
    }

    
}
