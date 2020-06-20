<?php

require_once 'Controllers/DefaultController.php';
require_once 'Controllers/BookController.php';
require_once 'Controllers/BoardController.php';
require_once 'Controllers/AdminController.php';

class Routing
{
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'login' => [
                'controller' => 'DefaultController',
                'action' => 'login'
            ],
            'index' => [
                'controller' => 'DefaultController',
                'action' => 'index'
            ],
            'logout' => [
                'controller' => 'DefaultController',
                'action' => 'logout'
            ],
            'back' => [
                'controller' => 'DefaultController',
                'action' => 'back'
            ],
            'selectmovie' => [
                'controller' => 'BookController',
                'action' => 'selectmovie'
            ],
            'dateandtime' => [
                'controller' => 'BookController',
                'action' => 'dateandtime'
            ],
            'seats' => [
                'controller' => 'BookController',
                'action' => 'seats'
            ],
            'podsuma' => [
                'controller' => 'BookController',
                'action' => 'podsuma'
            ],
            'board' => [
                'controller' => 'BoardController',
                'action' => 'board'
            ],
            'admin' => [
                'controller' => 'AdminController',
                'action' => 'admin'
            ],
            'admin_users' => [
                'controller' => 'AdminController',
                'action' => 'users'
            ],
            'admin_delete_user' => [
                'controller' => 'AdminController',
                'action' => 'userDelete'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if(isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}