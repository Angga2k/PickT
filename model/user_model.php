<?php

include_once 'config/conn.php';

class User {
    static function login($data=[]) {
        extract($data);
        global $conn;

        $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) { return $result; }
            else { return false; }
        }
        else { return false; }
    }

    static function LoginAdmin($data=[]) {
        extract($data);
        global $conn;
    
        if(isset($data['email']) && isset($data['password'])) {
            $email = $conn->real_escape_string($data['email']);
            $password = $conn->real_escape_string($data['password']);
            $role = "admin";
    
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? and role = ?");
            $stmt->bind_param("ss", $email, $role);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                $hashedPassword = $user['password'];
    
                if (password_verify($password, $hashedPassword)) {
                    return $user;

                } else { return false; }
            } else { return false;}
        } else { return false;}
    }

    static function LoginGuru($data=[]) {
        extract($data);
        global $conn;
    
        if(isset($data['email']) && isset($data['password'])) {
            $email = $conn->real_escape_string($data['email']);
            $password = $conn->real_escape_string($data['password']);
            $role = "teacher";
    
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? and role = ?");
            $stmt->bind_param("ss", $email, $role);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                $hashedPassword = $user['password'];
    
                if (password_verify($password, $hashedPassword)) {
                    return $user;
                    
                } else { return false; }
            } else { return false; }
        } else { return false; }
    }
    
    static function LoginSiswa($data=[]) {
        extract($data);
        global $conn;
    
        if(isset($data['email']) && isset($data['password'])) {
            $email = $conn->real_escape_string($data['email']);
            $password = $conn->real_escape_string($data['password']);
            $role = "student";
    
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? and role = ?");
            $stmt->bind_param("ss", $email, $role);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                $hashedPassword = $user['password'];
    
                if (password_verify($password, $hashedPassword)) {
                    return $user;
                    
                } else { return false; }
            } else { return false; }
        } else { return false; }
    }

    static function RegisterSiswa($data = []) {
        extract($data);
        global $conn;
    
        $create_at      = date('Y-m-d H:i:s');
        $update_at      = date('Y-m-d H:i:s');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql            = "INSERT INTO users (full_name, email, password, create_at, update_at) VALUES (?, ?, ?, ?, ?)";
        $stmt           = $conn->prepare($sql);
    
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
    
        $stmt->bind_param('sssss', $full_name, $email, $hashedPassword, $create_at, $update_at);
    
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function RegisterGuru($data = []) {
        extract($data);
        global $conn;
    
        $role           = 'teacher';
        $create_at      = date('Y-m-d H:i:s');
        $update_at      = date('Y-m-d H:i:s');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql            = "INSERT INTO users (full_name, email, password, role, create_at, update_at) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt           = $conn->prepare($sql);
    
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
    
        $stmt->bind_param('ssssss', $full_name, $email, $hashedPassword, $role, $create_at, $update_at);
    
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }    

    static function getPassword($email) { 
        global $conn;
        $sql = "SELECT password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function update($data=[]) {}

    static function delete($id='') {}
}