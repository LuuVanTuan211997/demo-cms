<?php

declare(strict_types=1);

use Slim\App;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

return function (App $app) {
    $app->get('/', [DashboardController::class, 'index']);
    $app->get('/{name}/{id}', [DashboardController::class, 'show']);

    $app->get('/logout',[LoginController::class, 'logout']);

    $app->get('/login', [LoginController::class, 'form']);
    $app->post('/login', [LoginController::class, 'login']);

    $app->get('/register', [RegisterController::class, 'form'] );
    $app->post('/register', [RegisterController::class, 'store']);
};
