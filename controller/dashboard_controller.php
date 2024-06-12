<?php

include_once 'model/dashboard_model.php';

class DashboardController{
    static function index(){
        view('Dashboard/index', ['url' => 'dashboard']);
    }

    static function dashboard_guru(){
        view('Dashboard/index-guru', ['url' => 'dashboard-guru']);
    }
}

?>