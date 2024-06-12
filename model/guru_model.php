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

    static function GetAllCoursesByID($course_id='') {
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

    static function GetAllLessonsByID($course_id='' ,$lesson_id='') {
        global $conn;
        $sql = "SELECT * FROM lessons";

        if ($course_id != '' || $lesson_id != '') {
            $sql .= " WHERE";
            if ($course_id != '') {
                $sql .= " course_id = $course_id";
                if ($lesson_id != '') {
                    $sql .= " AND";
                }
            }
            if ($lesson_id != '') {
                $sql .= " lesson_id = $lesson_id";
            }
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

    static function GetAllLessonsByCourse($course_id='', $teacher_id='') {
        global $conn;
        $sql = "SELECT courses.title AS course_title, lessons.* FROM courses LEFT JOIN lessons ON courses.course_id = lessons.course_id";
    
        if ($course_id != '' || $teacher_id != '') {
            $sql .= " WHERE";
            if ($course_id != '') {
                $sql .= " lessons.course_id = $course_id";
                if ($teacher_id != '') {
                    $sql .= " AND";
                }
            }
            if ($teacher_id != '') {
                $sql .= " courses.teacher_id = $teacher_id";
            }
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

    static function SaveAddMateri($data = []){
        extract($data);
        global $conn;

        $create_at      = date('Y-m-d H:i:s');
        $update_at      = date('Y-m-d H:i:s');
        
        $sql            = "INSERT INTO lessons (course_id, title, content, video_url, create_at, update_at) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt           = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param('isssss', $course_id, $title, $content, $video_url, $create_at, $update_at);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function SaveEditCourse($data = []) {
        extract($data);
        global $conn;

        $update_at = date('Y-m-d H:i:s');

        $sql = "UPDATE courses SET title = ?, description = ?, update_at = ? WHERE course_id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param('sssi', $title, $description, $update_at, $course_id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function SaveEditMateri($data = []) {
        extract($data);
        global $conn;

        $update_at = date('Y-m-d H:i:s');

        $sql = "UPDATE lessons SET title = ?, content = ?, video_url = ?, update_at = ? WHERE course_id = ? AND lesson_id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param('ssssii', $title, $content, $video_url, $update_at, $course_id, $lesson_id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function SaveDeleteKursus($course_id='') {
        global $conn;

        $sql2 = "DELETE FROM lessons WHERE course_id = ?";

        $stmt2 = $conn->prepare($sql2);
        if ($stmt2 === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt2->bind_param('i', $course_id);
        $stmt2->execute();
        $result = $stmt2->affected_rows > 0 ? true : false;
        $stmt2->close();

        $sql = "DELETE FROM courses WHERE course_id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param('i', $course_id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();

        return $result;
    }

    static function SaveDeleteMateri($course_id='', $lesson_id='') {
        global $conn;

        $sql = "DELETE FROM lessons WHERE course_id = ? AND lesson_id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param('ii', $course_id, $lesson_id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();

        return $result;
    }
}