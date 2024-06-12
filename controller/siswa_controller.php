<?php

include_once 'model/siswa_model.php';

class SiswaController{
    static function index(){
        $course_id = $_SESSION['user']['user_id'];
        $courses = Siswa::GetAllCourses($course_id);
        view('Siswa/jadwal-les', ['courses' => $courses]);
    }

    static function order_les_index(){
        view('Siswa/pemesanan-les', ['url' => 'pemesanan-les-siswa']);
    }

    static function add_order_les_index(){
        view('Siswa/add-pemesanan-les', ['url' => 'add-pemesanan-les']);
    }


    static function get_course_id() {
        $courses = Siswa::GetAllCourses();
        view('Siswa/add-pemesanan-les', ['courses' => $courses]);
    }
}

?>