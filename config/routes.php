<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::prefix('admin', function ($routes) {
    $routes->fallbacks('InflectedRoute');
    $routes->connect('/', ['controller' => 'pages', 'action' => 'home']);
});

Router::scope('/m', function ($routes) {
    $routes->fallbacks('InflectedRoute');
    $routes->connect('/', ['controller' => 'pages', 'action' => 'home']);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $routes->connect('/posts/:type', ['controller' => 'posts', 'action' => 'index'],['pass' => ['type']]);
    $routes->connect('/page/:slug', ['controller' => 'pages', 'action' => 'view'],['pass' => ['slug']]);
    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
