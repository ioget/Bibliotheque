<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        helper('url');
        helper('html');
        return $this->render('home');
        
    }
}
