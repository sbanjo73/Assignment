<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News; // Add this line
use App\Controllers\Pages;
use App\Controllers\ReviewController;
//use App\Controllers\Ajax;
//use App\Controllers\Assignment;



$routes->get('/', 'Home::index');
$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);


$routes->post('news/', [News::class, 'create']);

//$routes->get('review/create', [ReviewController::class, 'create']); 
 $routes->post('review/create', [ReviewController::class, 'create']); 
 $routes->get('review', [ReviewController::class, 'submitReview']);
 $routes->get('review/getReviews',[ReviewController:: class, 'getReviews']);



$routes->get('news/(:segment)', [News::class, 'show']);


$routes->get('pages', [Pages::class, 'index']);
$routes->get('action', [Pages::class, 'show_action']);
//$routes->get('ajaxnews/(:segment)', [Ajax::class, 'get']);
//$routes->get('Assignment', [Assignment::class, 'index']);
//$routes->get('reviews', 'Assignment::reviews');







$routes->get('(:segment)', [Pages::class, 'view']);
