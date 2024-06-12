<?php

include_once 'model/guru_model.php';

class GuruController{
    static function index(){
        $teacher_id = $_SESSION['user']['user_id'];
        $courses = Guru::GetAllCourses($teacher_id);
        view('Guru/list-kursus', ['courses' => $courses]);
    }

    static function add_kursus(){
        view('Guru/add-kursus', ['url' => 'tambah-kursus']);
    }

    static function add_materi() {
        view('Guru/add-lessons', ['url' => 'tambah-materi']);
    }

    static function save_add_kursus(){
        $post = array_map('htmlspecialchars', $_POST);
        $result = Guru::SaveAddCourses([
            'title' => $post['title'],
            'description' => $post['description'],
            'teacher_id' => $_SESSION['user']['user_id']
        ]);

        if ($result) {
            echo json_encode(['status' => 'success']);
        }
        else {
            echo json_encode(['status' => 'failed']);
        }
    }

    static function get_course_by_id() {
        $teacher_id = $_SESSION['user']['user_id'];
        $courses = Guru::GetAllCourses($teacher_id);
        view('Guru/add-lessons', ['courses' => $courses]);
    }
}

?>