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

Router::url('dashboard-siswa' , 'GET', 'DashboardController::index');
Router::url('dashboard-guru', 'GET', 'DashboardController::dashboard_guru');

Router::url('jadwal-les-siswa', 'GET', 'SiswaController::index');
Router::url('pemesanan-les-siswa', 'GET', 'SiswaController::order_les_index');
Router::url('add-pemesanan-les', 'GET', 'SiswaController::add_order_les_index');

Router::url('list-kursus', 'GET', 'GuruController::index');
Router::url('tambah-kursus', 'GET', 'GuruController::add_kursus');

Router::url('tambah-materi', 'GET', 'GuruController::add_materi');
Router::url('tambah-materi', 'GET', 'GuruController::get_course_by_id');

// Router::url('add-pemesanan-les', 'GET', 'SiswaController::add_lesson');
Router::url('add-pemesanan-les', 'GET', 'SiswaController::get_course_id');

Router::url('logout', 'GET', 'AuthController::logout');

# POST
// Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('admin', 'POST', 'AuthController::SaveLoginAdmin');
Router::url('login-guru', 'POST', 'AuthController::SaveLoginGuru');
Router::url('login-siswa', 'POST', 'AuthController::SaveLoginSiswa');

Router::url('register-siswa', 'POST', 'AuthController::SaveRegisterSiswa');
Router::url('register-guru', 'POST', 'AuthController::SaveRegisterGuru');
Router::url('tambah-kursus', 'POST', 'GuruController::save_add_kursus');
// Router::url('register', 'post', 'AuthController::saveRegister');
// Router::url('contacts/add', 'post', 'ContactController::saveAdd');
// Router::url('contacts/edit', 'post', 'ContactController::saveEdit');


# API GET
// Router::url('outside', 'get', 'ContactController::api');

new Router();