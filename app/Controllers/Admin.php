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
}
