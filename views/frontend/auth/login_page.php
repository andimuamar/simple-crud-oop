<html>
<?php

include("views/frontend/layout/header.php");
include("views/frontend/layout/nav.php");

require_once("./functions/auth.php");
$auth = new auth();

var_dump($auth->login("admin", "admin"));
?>
<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-4 mx">
            <h3>Login Page</h3>
            <br>
            <form>
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example1" class="form-control" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example2" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="button" data-mdb-button-init data-mdb-ripple-init
                    class="btn btn-primary btn-block mb-4">Sign
                    in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>have registered<a href="/register">Register</a></p>
                </div>
            </form>
        </div>

    </div>
</div>

<?php
    include("views/frontend/layout/footer.php");
?>

</html>