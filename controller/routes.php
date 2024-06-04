<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

# GET
Router::url('/', 'get', function () { return view('welcome'); });

Router::url('register-siswa', 'GET', 'AuthController::register');
Router::url('login-siswa','GET' , 'AuthController::login');

# POST
// Router::url('login', 'post', 'AuthController::saveLogin');
// Router::url('register', 'post', 'AuthController::saveRegister');
// Router::url('contacts/add', 'post', 'ContactController::saveAdd');
// Router::url('contacts/edit', 'post', 'ContactController::saveEdit');


# API GET
Router::url('outside', 'get', 'ContactController::api');

new Router();