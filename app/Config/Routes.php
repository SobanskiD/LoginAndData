<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//personal routes
$routes->get('/', 'Login::index');//Startpage
$routes->get('login', 'Login::index'); // LoginForm
$routes->post('login/process', 'Login::process'); // LoginProcess
$routes->get('userpage', 'Home::userpage'); //UserPage
$routes->get('login/logout', 'Login::logout'); //logout
$routes->get('userpage/assigned_users', 'Login::assigned_users');//Assigned
$routes->get('userpage/rulespage', 'Home::rules');//RulesPage
$routes->get('userdetails/show/(:num)', 'UserDetails::show/$1');//user_details







//testpages
$routes->get('admin/strona', 'Login::strona');
$routes->get('admin/login', 'Login::index');

