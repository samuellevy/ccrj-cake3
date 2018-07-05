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

Router::scope('/m', ['m'=>true], function (RouteBuilder $routes) {
    $routes->fallbacks('InflectedRoute');
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $routes->connect('/posts/:type', ['controller' => 'posts', 'action' => 'index'],['pass' => ['type']]);
    $routes->connect('/page/:slug', ['controller' => 'pages', 'action' => 'view'],['pass' => ['slug']]);
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $routes->connect('/posts/:type', ['controller' => 'posts', 'action' => 'index'],['pass' => ['type']]);
    $routes->connect('/page/:slug', ['controller' => 'pages', 'action' => 'view'],['pass' => ['slug']]);
    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
