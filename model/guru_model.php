<?php

include_once 'config/conn.php';

class Guru{
    static function SaveAddCourses($data = []){
        extract($data);
        global $conn;

        $create_at      = date('Y-m-d H:i:s');
        $update_at      = date('Y-m-d H:i:s');
        
        $sql            = "INSERT INTO courses (title, description, teacher_id, created_at, update_at) VALUES (?, ?, ?, ?, ?)";
        $stmt           = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param('ssiss', $title, $description, $teacher_id, $create_at, $update_at);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function GetAllCourses($teacher_id='') {
        global $conn;
        $sql = "SELECT * FROM courses";
        if ($teacher_id!='') {
            $sql .= " WHERE teacher_id = $teacher_id";
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
        $sql = "SELECT courses_id, title, description FROM courses WHERE course_id = $course_id";
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