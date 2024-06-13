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
}
?>