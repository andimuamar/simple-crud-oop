<html>
<?php

include("views/frontend/layout/header.php");
include("views/frontend/layout/nav.php");

?>
<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-4 mx">
            <h3>Register Page</h3>
            <br>
            <form>
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example1" class="form-control" />
                    <label class="form-label" for="form2Example1">Name</label>
                </div>
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

                <!-- Confirm Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example2" class="form-control" />
                    <label class="form-label" for="form2Example2">Confirm Password</label>
                </div>
                <!-- Submit button -->
                <button type="button" data-mdb-button-init data-mdb-ripple-init
                    class="btn btn-primary btn-block mb-4">Sign
                    in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="/login">Login</a></p>
                </div>
            </form>
        </div>

    </div>
</div>

<?php
    include("views/frontend/layout/footer.php");
?>

</html>