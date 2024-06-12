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
        $sql = "SELECT course_id, title, description FROM courses WHERE course_id = $course_id";
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