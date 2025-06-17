<?php

require_once("config/config.inc.php");

class auth
{
    function login($username, $password)
    {
        $connect = new connect();
        $conn = $connect->connect_database();

        $sql = "SELECT * FROM users WHERE name='$username' AND password='$password'"; 
        $result = $conn->query($sql);

        if ($result->num_rows > 0) { 

            $_SESSION['name'] = $name; 

            header("Location: welcome.php"); 

        } else { 

            echo "Login gagal. <a href='index.php'>Coba lagi</a>"; 

        } 

        $conn->close();

    }

    function logout()
    {
        session_start(); 

        session_destroy(); 

        header("Location: index.php"); 
    }
}