<form method="post" id="form_insert">
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="name" name="name" class="form-control" />
        <label class="form-label" for="form2Example1">Name</label>
    </div>
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="email" name="email" class="form-control" />
        <label class="form-label" for="form2Example1">Email address</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="password" name="password" class="form-control" />
        <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- Confirm Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="confirm_password" name="confirm_password" class="form-control" />
        <label class="form-label" for="form2Example2">Confirm Password</label>
    </div>
    <!-- Submit button -->
    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block btn-create-user">Create</button>
</form>