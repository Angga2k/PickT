<?php

include_once 'model/user_model.php';

class AuthController {
    static function LoginSiswa() {
        view('Auth/auth-siswa', ['url' => 'login-siswa']);
    }

    static function LoginGuru() {
        view('Auth/auth-guru', ['url' => 'login-guru']);
    }

    static function LoginAdmin() {
        view('Auth/auth-admin', ['url' => 'admin']);
    }

    static function RegisterSiswa() {
        view('Auth/register-siswa', ['url' => 'register-siswa']);
    }

    static function RegisterGuru() {
        view('Auth/register-guru', ['url' => 'register-guru']);
    }

    static function SaveLoginGuru() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::LoginGuru([
            'email' => $post['email'],
            'password' => $post['password']
        ]);
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.BASEDIR.'dashboard');
        }
        else {
            header('Location: '.BASEURL.BASEDIR. 'login-guru?failed=true');
        }
    }

    static function SaveLoginSiswa() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::LoginSiswa([
            'email' => $post['email'],
            'password' => $post['password']
        ]);
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            echo json_encode(['status' => 'success']);
        }
        else {
            echo json_encode(['status' => 'failed']);
        }
    }

    static function SaveLoginAdmin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::LoginAdmin([
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
        
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.BASEDIR.'dashboard');
        }
        else {
            header('Location: '.BASEURL.BASEDIR. 'admin');
        }
    }

    static function SaveRegisterSiswa() {
        $post = array_map('htmlspecialchars', $_POST);
    
        if ($post['password'] !== $post['confirm_password']) {
            echo json_encode(['status' => 'password_mismatch']);
            exit;
        }
    
        $user = User::RegisterSiswa([
            'full_name' => $post['full_name'], 
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
    
        if ($user) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'failed']);
        }
        exit;
    }

    static function SaveRegisterGuru() {
        $post   = array_map('htmlspecialchars', $_POST);
    
        if ($post['password'] !== $post['confirm_password']) {
            echo json_encode(['status' => 'password_mismatch']);
            exit;
        }
    
        $user   = User::RegisterGuru([
            'full_name' => $post['full_name'], 
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
    
        if ($user) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'failed']);
        }
        exit;
    }    

    static function logout() {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header('Location: '.BASEURL);
    }

    static function forgotPassword() {}
}