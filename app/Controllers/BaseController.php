<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

 

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }


    //  my modification (Rosly)

    public $title = "Bibliothèque";

    // good format du vardump() ! back-end helper
    public function vd($v)
    {
        echo "<pre>";
        var_dump($v);
        echo "</pre>";
    }

    //  good format [ vardump() +  die() ] => die in dump ! back-end helper
    public function dd($v)
    {
        echo "<pre>";
        var_dump($v);
        echo "</pre>";
        die();
    }

    public function isUsersConnect()
    {
       return  isset($_SESSION['users']) ? true : false;
    }

    public function isAdminConnect()
    {
        return  isset($_SESSION['admin']) ? true : false;
    }

    // nouvelle fonction pour retourne la vue
    public function render ($file, $data = null , $module = 'pages/')
    {
        return view('templates/header',['title' => $this->title , 'data' => $data ])
        . view($module . $file)
        . view('templates/footer');
    }
}
