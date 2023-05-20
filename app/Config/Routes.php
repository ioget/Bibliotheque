<?php

namespace Config;
use App\Controllers\News;
use App\Controllers\Pages;


// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.  news/   putReturn
$routes->get('/', 'Home::index'); //   

//$routes->post('/api/registrationpermonth', 'ApiController::RegistrationPerMonth'); getCsrf /get/user

$routes->get('/api/data', 'ApiController::data');
$routes->post('/api/create/book', 'Admin::CreateBook');
$routes->post('/search/book', 'Admin::getBook');
$routes->get('/api/get/csrf', 'ApiController::getCsrf');
$routes->post('/api/get/users', 'ApiController::getUser');
$routes->post('/api/get/book', 'ApiController::getBook');
$routes->get('/api/user/borrow', 'ApiController::borrow');
$routes->get('/put/borrow', 'Admin::putBorrow/$p1/$p2/$p3');
$routes->get('/put/return', 'Admin::putReturn/$p1/$p2/$p3');
/*
$routes->group('api', function($routes){ search/book
     $routes->group('stats',function($routes){
            $routes->get("registed", "ApiController::RegistrationPerMonth");
     });
});

*/
$routes->match(['get', 'post'],'/login', 'Admin::login');
$routes->get('/dashboard', 'Admin::dashboard'); 
$routes->get('/dashboard/books/', 'Admin::books'); 
$routes->get('/dashboard/librarian/', 'Admin::caisse'); 
$routes->get('/dashboard/logout', 'Admin::logout'); 
$routes->get('/dashboard/admin', 'Admin::admin');
$routes->get('/dashboard/members/(:alpha)', 'Admin::members/$1');
$routes->match(['get', 'post'],'/teachers/registed', 'Users::teachersRegisted');
$routes->match(['get', 'post'],'/students/registed', 'Users::studentsRegisted');
$routes->get('(:segment)', [Pages::class, 'index']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
