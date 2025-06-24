<html>
<?php

session_start();

include("views/frontend/layout/header.php");
include("views/frontend/layout/nav.php");

var_dump($_SESSION['name']);
?>
<div class="container">
<h1>Home</h1>
</div>

<?php
    include("views/frontend/layout/footer.php");
?>
</html>

