<?php

include_once 'model/dashboard_model.php';

class DashboardController{
    static function index(){
        view('Dashboard/dashboard-siswa', ['url' => 'dashboard-siswa']);
    }

    static function dashboard_guru(){
        view('Dashboard/index-guru', ['url' => 'dashboard-guru']);
    }
}

?>