<?php 

require_once("./functions/users.php");

$users = new users();

if(!empty($_POST)){
    $users->delete($_POST);
}

?>