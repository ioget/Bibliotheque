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

        $data['navLinkActive'] = 'registed'; // link actif a mettre en couleur
        return $this->render('teachersRegisted', $data, 'Auth/');
    }

    public function studentsRegisted()
    {
        helper('url');
        helper('html');
        helper('form');

        // back-end here


        $post = $_POST;

        $this->d($post);
        $data['navLinkActive'] = 'registed';

        if (!empty($_POST)) {
            //   return view('signup');
            $rules = [
                'password'  => ['rules' => 'required'],
                'passwordConf' =>  ['rules' => 'required|matches[password]']
            ];

            if (!$this->validateData($post, $rules)) {
                $data['authentification-errors'] = "Passwords other than confirm";   
               
                return $this->render('studentsRegisted', $data, 'Auth/');
            } 
            $model  = new UsersModel();
            $Now = new \DateTime('now');

            $post['point'] = 12;
            unset($post['passwordConf']);
            $post['password'] = password_hash($post['password'] , PASSWORD_BCRYPT);
            $post['type'] = 'student';
            $post['create_at'] = $Now->format('Y-m-d H:i:s');
            $model->insert_user($post);

      /*      $model->insert([
                "password" =>  $post['fristname'],
                "password" =>  $post['password'],
                "nom" => $post['lastname'],
                "matricule" => $post['matricule'],
                "email" => $post['email'],
                "sexe" => $post['sexe'],
                "date_naissance" => $post['date_naissance'],
                "id_niveau" => $post['niveau'],
                "id_filiere" => $post['filiere'],
                "sexe" => $post['sexe'],
                "type" => 'student' ,
                "point" => 12,
                "create_at" =>  $Now->format('Y-m-d H:i:s'),
            ]);*/
            $data['authentification-succes'] = "Account created";  
            return $this->render('studentsRegisted', $data, 'Auth/');
        }




        // link actif a mettre en couleur
        return $this->render('studentsRegisted', $data, 'Auth/');
    }
}
