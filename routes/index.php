<?php // router.php

$server = $_SERVER["REQUEST_URI"];

switch ($_SERVER["REQUEST_URI"]){

    case "/":
    include("./views/frontend/home/home.php");
    break;
    case "/login":
    include("./views/frontend/auth/login_page.php");
    break;
    case "/logout":
    include("./views/frontend/auth/logout_page.php");
    break;
    case "/register":
    include("./views/frontend/auth/register_page.php");
    break;
    case "/dashboard":
    include("./views/backend/dashboard/index.php");
    break;
    case "/users":
    include("./views/backend/users/index.php");
    break;
    case "/roles":
    include("./views/backend/roles/index.php");
    break;
    case "/users/add":
    include("./process/users/create.php");
    break;
    case "/users/delete":
    include("./process/users/delete.php");
    break;
    
    default:
    echo "404: Halaman tidak ditemukan";

}
?>