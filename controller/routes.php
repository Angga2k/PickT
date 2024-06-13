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

Router::url('add-enrollment', 'GET', 'SiswaController::index');
Router::url('list-enrollment', 'GET', 'SiswaController::order_les_index');
Router::url('enrollment', 'GET', 'SiswaController::add_order_les_index');

Router::url('list-kursus', 'GET', 'GuruController::index');
Router::url('list-kursus/tambah-kursus', 'GET', 'GuruController::add_kursus');

Router::url('list-kursus/tambah-materi', 'GET', 'GuruController::add_materi');
Router::url('list-kursus/tambah-materi', 'GET', 'GuruController::get_course_by_id');
Router::url('list-kursus/detail-kursus/edit-materi', 'GET', 'GuruController::get_lessons_by_id_edit');
Router::url('list-kursus/detail-kursus/delete-materi', 'GET', 'GuruController::save_delete_lessons');


Router::url('list-kursus/detail-kursus', 'GET', 'GuruController::get_course_by_id_details');
Router::url('list-kursus/edit-kursus', 'GET', 'GuruController::get_course_by_id_edit');
Router::url('list-kursus/delete-kursus', 'GET', 'GuruController::save_delete_kursus');
// Router::url('add-pemesanan-les', 'GET', 'SiswaController::add_lesson');
Router::url('add-enrollment', 'GET', 'SiswaController::get_course_id');

Router::url('logout', 'GET', 'AuthController::logout');

# POST
// Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('admin', 'POST', 'AuthController::SaveLoginAdmin');
Router::url('login-guru', 'POST', 'AuthController::SaveLoginGuru');
Router::url('login-siswa', 'POST', 'AuthController::SaveLoginSiswa');

Router::url('add-enrollment/get-course', 'POST', 'SiswaController::get_course');
Router::url('register-siswa', 'POST', 'AuthController::SaveRegisterSiswa');
Router::url('register-guru', 'POST', 'AuthController::SaveRegisterGuru');

Router::url('list-kursus/tambah-kursus', 'POST', 'GuruController::save_add_kursus');
Router::url('list-kursus/edit-kursus', 'POST', 'GuruController::save_edit_kursus');

Router::url('list-kursus/tambah-materi', 'POST', 'GuruController::save_add_materi');
Router::url('list-kursus/detail-kursus/edit-materi', 'POST', 'GuruController::save_edit_materi');

Router::url('add-enrollment', 'POST', 'SiswaController::save_enrollement');


new Router();