<?php


use App\Controllers\News; // Add this line
use App\Controllers\Pages;
use App\Controllers\Ajax;

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');
$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line

$routes->get('pages', [Pages::class, 'index']);
$routes->get('ajaxnews/(:segment)', [Ajax::class, 'get']);
$routes->get('(:segment)', [Pages::class, 'view']);
