<?php

include_once 'config/conn.php';

class Siswa{
    static function GetAllCourses($course_id='') {
        global $conn;
        $sql = "SELECT * FROM courses";
        if ($course_id!='') {
            $sql .= " WHERE course_id = $course_id";
        }
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }

    static function GetCourseById($course_id) {
        global $conn;
        $sql = "SELECT courses.course_id, courses.title, courses.description, users.full_name AS teacher 
                FROM courses 
                JOIN users ON courses.teacher_id = users.user_id 
                WHERE courses.course_id = $course_id";
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        
        $result->free();
        $conn->close();
        return $rows;
    }

    static function SaveEnrollement($data=[]) {
        extract($data);
        global $conn;
        $sql = "INSERT INTO enrollments (student_id, course_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $student_id, $course_id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function GetAllEnrollments($student_id = '') {
        global $conn;
        $sql = "SELECT enrollments.enrollment_id, enrollments.student_id, enrollments.course_id, courses.title AS course_title, courses.description AS course_description, users.full_name AS teacher_name, courses.teacher_id, lessons.lesson_id, lessons.title AS lesson_title FROM enrollments INNER JOIN courses ON enrollments.course_id = courses.course_id INNER JOIN lessons ON courses.course_id = lessons.course_id INNER JOIN users ON courses.teacher_id = users.user_id WHERE enrollments.student_id = $student_id";
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        
        $result->free();
        $conn->close();
        return $rows;
    }

    static function GetAllEnrollmentsByID($course_id = '') {
        global $conn;
        $sql = "SELECT enrollments.enrollment_id, enrollments.student_id, enrollments.course_id, courses.title AS course_title,lessons.title AS lessons_title, lessons.content, lessons.video_url, users.full_name AS teacher_name, courses.teacher_id, lessons.lesson_id, lessons.title AS lesson_title FROM enrollments INNER JOIN courses ON enrollments.course_id = courses.course_id INNER JOIN lessons ON courses.course_id = lessons.course_id INNER JOIN users ON courses.teacher_id = users.user_id WHERE enrollments.course_id = $course_id";
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        
        $result->free();
        $conn->close();
        return $rows;
    }
}
?>