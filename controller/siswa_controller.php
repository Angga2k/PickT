<?php

include_once 'model/siswa_model.php';

class SiswaController{
    static function index(){
        view('Siswa/jadwal-les', ['url' => 'jadwal-les-siswa']);
    }

    static function order_les_index(){
        view('Siswa/pemesanan-les', ['url' => 'pemesanan-les-siswa']);
    }

    static function add_order_les_index(){
        view('Siswa/add-pemesanan-les', ['url' => 'add-pemesanan-les']);
    }
}

?>