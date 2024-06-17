<?php

use App\Models\WebController;
use App\Models\WebRoute as AppRoute;
use Illuminate\Support\Facades\Route;

foreach (AppRoute::all() as $route) {
    $sub_module = $route->webSubModule;
    $module = $sub_module->webModule;
    $controller = $sub_module->webController;

    $_middlewares = NULL;
    $_route = $module->source . '/' . $sub_module->source . $route->source;
    $_controller = config('app.default_controller_path') . $controller->controller;

    if (!empty($route->middlewares))
        $_middlewares = explode(',', $route->middlewares);

    Route::{$route->request_type}($_route, [$_controller, $route->action])->withTrashed()->middleware($_middlewares);
}

