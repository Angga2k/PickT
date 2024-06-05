<?php

include_once 'model/dashboard_model.php';

class DashboardController{
    static function index(){
        view('Dashboard/index', ['url' => 'dashboard']);
    }
}

?>