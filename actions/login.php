<?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if ($email=='admin@example.com' && $pass=='admin@sms'){
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../admin/dashboard.php');
        }
        elseif ($email=='student@example.com' && $pass=='student@sms'){
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../student/dashboard2.php');
        }
        elseif ($email=='teacher@example.com' && $pass=='teacher@sms'){
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../teacher/dashboard1.php');
        }
        elseif ($email=='staff@example.com' && $pass=='staff@sms'){
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../staff/dashboard3.php');
        }
        elseif ($email=='parent@example.com' && $pass=='parent@sms'){
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../student/dashboard2.php');
        }
        else{
            echo 'Invalid Credentials';
        }
    }