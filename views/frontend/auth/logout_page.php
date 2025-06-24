<?php

include("views/frontend/layout/header.php");
include("views/frontend/layout/nav.php");

require_once("./functions/auth.php");
$auth = new auth();

$auth->logout();
?>