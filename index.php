<?php
require_once 'config/database.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/ProductController.php';

// Simple routing system
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Remove base path if running in subdirectory
$basePath = dirname($_SERVER['SCRIPT_NAME']);
if ($basePath !== '/') {
    $path = substr($path, strlen($basePath));
}

// Route handling
switch ($path) {
    case '/':
    case '':
        $controller = new HomeController();
        $controller->index();
        break;
    
    case '/users':
        $controller = new UserController();
        if ($method === 'GET') {
            $controller->index();
        } elseif ($method === 'POST') {
            $controller->create();
        }
        break;
    
    case '/users/create':
        $controller = new UserController();
        $controller->showCreateForm();
        break;
    
    case '/products':
        $controller = new ProductController();
        if ($method === 'GET') {
            $controller->index();
        } elseif ($method === 'POST') {
            $controller->create();
        }
        break;
    
    case '/products/create':
        $controller = new ProductController();
        $controller->showCreateForm();
        break;
    
    case '/api/users':
        header('Content-Type: application/json');
        $controller = new UserController();
        if ($method === 'GET') {
            $controller->apiIndex();
        } elseif ($method === 'POST') {
            $controller->apiCreate();
        }
        break;
    
    case '/api/products':
        header('Content-Type: application/json');
        $controller = new ProductController();
        if ($method === 'GET') {
            $controller->apiIndex();
        } elseif ($method === 'POST') {
            $controller->apiCreate();
        }
        break;
    
    default:
        http_response_code(404);
        include 'views/404.php';
        break;
}
?>