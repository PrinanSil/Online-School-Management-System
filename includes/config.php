<?php
    $db_conn = mysqli_connect('localhost', 'root', '', 'osms_project');

    if(!$db_conn){
        echo 'Connection Failed';
    }   
    session_start();
?>