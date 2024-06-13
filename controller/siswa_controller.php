<?php

include_once 'model/siswa_model.php';

class SiswaController{
    static function index(){
        $course_id = $_SESSION['user']['user_id'];
        $courses = Siswa::GetAllCourses($course_id);
        view('Siswa/add-enrollment', ['courses' => $courses]);
    }

    static function order_les_index(){
        view('Siswa/list-enrollment', ['url' => 'enrollement']);
    }

    static function add_order_les_index(){
        view('Siswa/enrollment', ['url' => 'enrollement']);
    }


    static function get_course_id() {
        $courses = Siswa::GetAllCourses();
        view('Siswa/add-enrollment', ['courses' => $courses]);
    }

    static function get_course() {
        $response = array();
    
        if (isset($_POST['course_id'])) {
            $courseId = $_POST['course_id'];
    
            $courseDetails = Siswa::GetCourseById($courseId);
    
            if (!empty($courseDetails)) {
                foreach ($courseDetails as $course) {
                    $response['title'] = $course['title'];
                    $response['description'] = $course['description'];
                    $response['teacher'] = $course['teacher'];
                }
            } else {
                $response['error'] = "Data kursus tidak ditemukan.";
            }
        } else {
            $response['error'] = "Tidak ada ID kursus yang diberikan.";
        }

        echo json_encode($response);
    
        return json_encode($response);
    }

    static function get_all_enrollments() {
        $student_id = $_SESSION['user']['user_id'];
        $enrollments = Siswa::GetAllEnrollments($student_id);
        view('Siswa/list-enrollment', ['enrollments' => $enrollments]);
    }

    static function get_all_enrollment_by_id() {
        $course_id = $_GET['id'];
        $enrollments = Siswa::GetAllEnrollmentsByID($course_id);
        view('Siswa/details-enrollment', ['enrollments' => $enrollments]);
    }

    static function save_enrollement() {
        $post = array_map('htmlspecialchars', $_POST);
        $student_id = $_SESSION['user']['user_id'];
        $result = Siswa::SaveEnrollement([
            'student_id' => $student_id,
            'course_id' => $post['course_id']
        ]);
        if ($result) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'failed']);
        }
    }
}

?>