<?php
use Bramus\Router\Router;
use Pv\BanKhoaHoc\Controllers\Admin\AuthenticateController;
use Pv\BanKhoaHoc\Controllers\Admin\CategoryController;
use Pv\BanKhoaHoc\Controllers\Admin\CourseController;
use Pv\BanKhoaHoc\Controllers\Admin\DashboardController;
use Pv\BanKhoaHoc\Controllers\Admin\StatusController;
use Pv\BanKhoaHoc\Controllers\Admin\UserController;
use Pv\BanKhoaHoc\Controllers\Client\HomeController;
use Pv\BanKhoaHoc\Controllers\Client\CourseController as ClientCourseController;
use Pv\BanKhoaHoc\Controllers\Client\CategoryController as ClientCategoryController;


// Create Router instance
$router = new Router();

// Define routes
$router->get('/',                                       HomeController::class . '@index');
// $router->get('/register',                               ClientPostController::class . '@register');
$router->get('/course/{id}',                            ClientCourseController::class . '@show');
$router->get('/category-show/{id}',                     ClientCategoryController::class . '@show');

$router->match('GET|POST', '/auth/login',               AuthenticateController::class . '@login');

$router->mount('/Client',function () use ($router){

});

$router->mount('/Admin', function () use ($router) {
    $router->get('/',                                   DashboardController::class . '@index');
    $router->get('/logout',                             AuthenticateController::class . '@logout');

    $router->mount('/users', function () use ($router) {
        $router->match('GET|POST','/',                  UserController::class . '@index');
        // $router->get('/search/{kyw}',                   UserController::class . '@search');
        $router->get('/{id}/delete',                    UserController::class . '@delete');
        $router->get('/{id}/show',                      UserController::class . '@show');
        $router->match('GET|POST', '/{id}/update',      UserController::class . '@update');
        $router->match('GET|POST', '/create',           UserController::class . '@create');
    });

    $router->mount('/categories', function () use ($router) {
        $router->match('GET|POST','/',                  CategoryController::class . '@index');
        $router->get('/{id}/delete',                    CategoryController::class . '@delete');
        $router->get('/{id}/show',                      CategoryController::class . '@show');
        $router->match('GET|POST', '/{id}/update',      CategoryController::class . '@update');
        $router->match('GET|POST', '/create',           CategoryController::class . '@create');
    });

    $router->mount('/courses', function () use ($router) {
        $router->match('GET|POST','/',                  CourseController::class . '@index');
        $router->get('/{id}/show',                      CourseController::class . '@show');
        $router->match('GET|POST', '/{id}/update',      CourseController::class . '@update');
        $router->get('/{id}/delete',                    CourseController::class . '@delete');
        $router->match('GET|POST', '/create',           CourseController::class . '@create');
    });

    $router->mount('/orders', function () use ($router) {
        $router->get('/',                               CategoryController::class . '@index');
        $router->get('/{id}/delete',                    CategoryController::class . '@delete');
        $router->get('/{id}/show',                      CategoryController::class . '@show');
        $router->match('GET|POST', '/{id}/update',      CategoryController::class . '@update');
        $router->match('GET|POST', '/create',           CategoryController::class . '@create');
    });

    $router->mount('/statuses', function () use ($router) {
        $router->get('/',                               StatusController::class . '@index');
        $router->get('/{id}/delete',                    StatusController::class . '@delete');
        $router->get('/{id}/show',                      StatusController::class . '@show');
        $router->match('GET|POST', '/{id}/update',      StatusController::class . '@update');
        $router->match('GET|POST', '/create',           StatusController::class . '@create');
    });
});

$router->before('GET|POST', '/Admin/*', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit();
    }
});

$router->before('GET|POST', '/Admin/.*', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit();
    }
});

// Run it!
$router->run();