<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
        helper('url');
        helper('html');
        helper('form');

        if (!$this->isAdminConnect()) {
            if (!empty($_POST)) {
                // back-end here (traite form data )

            }
        }

        $data['navLinkActive'] = 'admin'; // link actif a mettre en couleur
        return $this->render('login', $data, 'Auth/');
    }

    /*
        if(!$this->isAdminConnect())
        {
            $data['navLinkActive'] = 'admin'; // link actif a mettre en couleur
            return $this->render('login', $data, 'Auth/');
        }else{
            $data['navLinkActive'] = 'dashboard';
            return $this->render('dashboard', $data, 'Admin/','templates/headerAdmin');
        }


    */


    public function dashboard()
    {
        helper('url');
        helper('html');
        helper('form');
        $graph = array(
            'labels' => array('Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun'),
            'data' => array(15,5, 8, 30, 35, 20)
         );
        $data['navLinkActive'] = 'dashboard';
        $data['graph'] = $graph;
        return $this->render('dashboard', $data, 'Admin/','templates/headerAdmin');
    }
}
