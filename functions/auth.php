<?php

require_once("config/config.inc.php");

class auth
{
    function login($username, $password)
    {
        $connect = new connect();
        $conn = $connect->connect_database();

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        return $result;
    }

    function logout()
    {

    }
}