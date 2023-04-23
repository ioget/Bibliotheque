<?php

namespace App\Controllers;

class Admin extends BaseController
{

 
    public function __construct()
    {
        helper('url');
        helper('html');
        helper('form');
    }

    public function index()
    {
       

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
        $graph = array(
            'labels' => array('1', '2', '3', '4', '5','6','7','8','9','10','11', '12', '13', '14', '15', '16','17','18','19','20','21', '22', '23', '24', '25', '26','27','28','29','30','31'),
            'data' => array(15,5,8,30,35,20,25,10,8,30,35,20,15,5,8,30,65,20,25,10,8,30,14)
         );
        $data['navLinkActive'] = 'home';
        $data['graph'] = $graph;

        
        return $this->render('dashboard', $data, 'Admin/','templates/headerAdmin',"templates/footerAdmin");
    }

    public function members($members)
    {
  
        $members = ucfirst($members);

        $data['navLinkActive'] = 'members/'. $members;

        if( $members === "Students")
        {
            return $this->render('students', $data, 'Admin/','templates/headerAdmin',"templates/footerAdmin");
        }else{
            return $this->render('teachers', $data, 'Admin/','templates/headerAdmin',"templates/footerAdmin");
        }
    }

    public function books()
    {
        $data['navLinkActive'] = 'books';
        return $this->render('books', $data, 'Admin/','templates/headerAdmin',"templates/footerAdmin");
    }

    public function admin()
    {
       
            $data['navLinkActive'] = 'admin';
            return $this->render('admin', $data, 'Admin/','templates/headerAdmin',"templates/footerAdmin");
    }

    public function logout()
    {
        //  backend logout here


        // redirection to login page
        return redirect()->to( base_url() ."/dashboard");
    }
}
