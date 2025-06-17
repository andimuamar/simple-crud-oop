<html>
<?php

include("views/frontend/layout/header.php");
include("views/frontend/layout/nav.php");

?>
<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-12 mb-3">
            <h3 class="">Roles Page</h3>
            <button class="btn btn-success btn-xs">Create</button>
            <button class="btn btn-success btn-xs">Export Excel</button>
            <button class="btn btn-danger btn-xs">Print PDF</button>
        </div>
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><button class="btn btn-warning">Edit</button> <button class="btn btn-danger">Delete</button> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    include("views/frontend/layout/footer.php");
?>

</html>