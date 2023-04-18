<?php

namespace App\Controllers;

class Users extends BaseController
{
    
    public function teachersRegisted()
    {
        helper('url');
        helper('html');
        helper('form');
        // back-end here

        $data['navLinkActive'] = 'registed'; // link actif a mettre en couleur
        return $this->render('teachersRegisted', $data ,'Auth/');      
    }

    public function studentsRegisted()
    {
        helper('url');
        helper('html');
        helper('form');

        // back-end here

        $data['navLinkActive'] = 'registed'; // link actif a mettre en couleur
        return $this->render('studentsRegisted', $data ,'Auth/');      
    }
}
