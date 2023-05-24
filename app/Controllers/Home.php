<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        helper('url');
        helper('html');
        $data['navLinkActive'] = 'home'; // link actif a mettre en couleur
        return $this->render('home', $data);
        
    }
}
