<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\ReviewController;

$routes->get('/', [News::class, 'index']);

$routes->get('review/get',[ReviewController::class, 'getReviews'], ['as' => 'review_get']);
$routes->get('review/new', [ReviewController::class, 'index'], ['as' => 'review_new']);
$routes->post('review/create', [ReviewController::class, 'create']); 

$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('action', [Pages::class, 'show_action']);
//$routes->get('ajaxnews/(:segment)', [Ajax::class, 'get']);
//$routes->get('Assignment', [Assignment::class, 'index']);
//$routes->get('reviews', 'Assignment::reviews');

$routes->get('(:segment)', [Pages::class, 'view']);