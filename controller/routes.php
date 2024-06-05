<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

# GET
Router::url('/', 'get', function () { return view('welcome'); });

Router::url('admin', 'GET', 'AuthController::LoginAdmin');
Router::url('login-siswa', 'GET' , 'AuthController::LoginSiswa');
Router::url('login-guru', 'GET', 'AuthController::LoginGuru');

Router::url('register-siswa', 'GET', 'AuthController::RegisterSiswa');
Router::url('register-guru', 'GET', 'AuthController::RegisterGuru');
Router::url('dashboard' , 'GET', 'DashboardController::index');

# POST
// Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('admin', 'POST', 'AuthController::SaveLoginAdmin');
Router::url('login-guru', 'POST', 'AuthController::SaveLoginGuru');
Router::url('login-siswa', 'POST', 'AuthController::SaveLoginSiswa');

Router::url('register-siswa', 'POST', 'AuthController::SaveRegisterSiswa');
Router::url('register-guru', 'POST', 'AuthController::SaveRegisterGuru');
// Router::url('register', 'post', 'AuthController::saveRegister');
// Router::url('contacts/add', 'post', 'ContactController::saveAdd');
// Router::url('contacts/edit', 'post', 'ContactController::saveEdit');


# API GET
// Router::url('outside', 'get', 'ContactController::api');

new Router();