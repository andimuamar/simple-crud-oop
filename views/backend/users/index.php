<html>
<?php

include("views/frontend/layout/header.php");
include("views/frontend/layout/nav.php");

require_once("./functions/users.php");
$users = new users();
$showData = $users->list();
?>
<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-12 mb-3">
            <h3 class="">Users Page</h3>
            <button class="btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">Create</button>
            <button class="btn btn-success btn-xs" id="export-button">Export Excel</button>
            <button class="btn btn-danger btn-xs" id="cmd">Print PDF</button>
        </div>
        <div class="col-lg-12">
            <table class="table table-bordered" id="example-table">
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
                  <?php
                  if($showData === false){
                    echo "data empty";
                  } 
                  else{
                    $no = 1;
                    foreach ($showData as $key => $value) {

                      ?>
                      <tr>
                          <th scope="row"><?php echo $no++ ?></th>
                          <td><?php echo $value['name']; ?></td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td><button class="btn btn-warning">Edit</button> 
                          <form method="post" id="form_delete" class="d-inline">
                            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-delete">Delete</button>
                          </form>
                          </td>
                      </tr>
                      <?php
                    }
                  }
                  
                  ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("create.php"); ?>
        <span id="showLoading"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php
    include("views/frontend/layout/footer.php");
?>

</html>