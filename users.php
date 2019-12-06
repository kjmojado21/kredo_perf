<?php
include('db_connection.php');

$loadTeachers = mysqli_query($conn, "SELECT * FROM teachers ORDER BY teacher_id;");

// NO PROMPT if table teachers is empty
// $numRows = mysqli_num_rows($loadTeachers);

if (isset($_POST['btnAddSave'])) {
   $fname = $_POST['addFirstName'];
   $lname = $_POST['addLastName'];
   $status = $_POST['addStatus'];

   $qry = "INSERT INTO teachers (teacher_fname, teacher_lname, stat) VALUES ('$fname', '$lname', '$status')";

   if ($conn->query($qry) === true) {
      // TODO: Improve alert
      echo "<script>alert('User added successfully');</script>";
      header("refresh:0");
   } else {
      echo "<script>alert('Error adding: $qry $conn->error');</script>";
   }
}

if (isset($_POST['btnEditSave'])) {
   $id = $_POST['btnEditSave'];
   $fname = $_POST['editFirstName'];
   $lname = $_POST['editLastName'];
   $status = $_POST['editStatus'];

   $qry = "UPDATE teachers SET teacher_fname='$fname', teacher_lname='$lname', stat='$status' WHERE teacher_id=$id";

   if ($conn->query($qry) === true) {
      // TODO: Improve alert
      echo "<script>alert('User updated successfully');</script>";
      header("refresh:0");
   } else {
      echo "<script>alert('Error updating: $qry $conn->error');</script>";
   }
}

if (isset($_POST['btnRemove'])) {
   $id = $_POST['btnRemove'];

   $qry = "DELETE FROM teachers WHERE teacher_id = $id";
   if ($conn->query($qry) === true) {
      // TODO: Improve alert
      echo "<script>alert('User successfully removed.');</script>";
      header("refresh: 0");
   } else {
      echo "<script>alert('Error removing: $qry $conn->error');</script>";
   }
}
?>

<?php include('view/header.php'); ?>

<title>Users</title>
<style>
   .card:hover {
      background-color: #f5f5f5;
   }

   .rounded-circle {
      width: 45px;
      height: 45px;
   }

   .rounded-circle.btn-sm {
      width: 36px;
      height: 36px;
   }

   select:required:invalid {
   color: gray;
   }

   option[value=""][disabled] {
   display: none;
   }

   option {
   color: black;
   }
</style>

<div class="container-fluid">
   <div class="row">
      <!-- SIDEBAR (LEFT) -->
      <div class="col-md-2 d-none d-md-block bg-light sidebar">
         <div class="sidebar-sticky ml-2">
            <ul class="nav flex-column text-truncate">
               <li class="nav-item">
                  <a class="nav-link" href="dashboard.php">
                     <i data-feather="home"></i>
                     Dashboard
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="#">
                     <i data-feather="users"></i>
                     Users
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="attendance.php">
                     <i data-feather="calendar"></i>
                     Attendance
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">
                     <i data-feather="settings"></i>
                     Settings
                  </a>
               </li>
            </ul>
         </div>
      </div>


      <!-- MAIN (RIGHT) -->
      <main role="main" class="ml-sm-auto col-md-10 px-5">
         <div class="d-flex flex-wrap flex-md-nowrap align-items-center my-5 pb-2 border-bottom">
            <i>
               <h1 class="display-4 text-muted">Users</h1>
            </i>
         </div> <!-- END OF FIRST SECTION -->

         <div class="row">
            <?php
            while ($row = mysqli_fetch_array($loadTeachers)) {
               $id = $row['teacher_id'];
               ?>
               <div class="col-md-3 m-2 px-0">
                  <div class="card" id="userCard">
                     <div class="card-header text-muted">
                        <p class="d-inline">Title/Position</p>
                        <div class="btn-group float-right" role="group">
                           <button data-toggle="collapse" title="Remove user" class="btn btn-sm btn-outline-danger rounded-circle" data-target="#removeUser<?= $id; ?>" aria-expanded="false"><i data-feather="trash" alt="Remove"></i>
                           </button>
                        </div>
                     </div>

                     <!-- <form method="post"> -->
                     <button data-target="#openEditUser" data-toggle="modal" class="btn text-center p-0" data-id="<?= $id; ?>" data-fname="<?= $row['teacher_fname']; ?>" data-lname="<?= $row['teacher_lname']; ?>" data-status="<?= $row['stat'] ?>">
                        <div class="card-body">
                           <h5 class="text-truncate"><?= $row['teacher_fname'] . " " . $row['teacher_lname'] ?></h5>
                           <p class="small text-muted"><?= $row['stat'] ?></p>
                        </div>
                     </button>
                     <!-- </form> -->

                     <form method="post">
                        <div class="collapse bg-dark text-light text-center" id="removeUser<?= $id; ?>">
                           <div class="card-body text-center">Are you sure you want to remove <?= $row['teacher_fname'] ?>?</div>
                           <button type="button" data-toggle="collapse" title="No" class="btn rounded-circle btn-secondary ml-2 mb-3" data-target="#removeUser<?= $id; ?>" aria-expanded="false"><i data-feather="x"></i></button>
                           <button class="btn rounded-circle btn-primary ml-2 mb-2" name="btnRemove" value="<?= $id; ?>" title="Yes"><i data-feather="check"></i></button>
                        </div>
                     </form>
                  </div> <!-- END OF CARD (USERS FROM DB) -->
               </div>
            <?php
            }
            ?>
         </div> <!-- END OF ROW -->
         <div class="row mb-5">
            <div class="card col-md-3 m-2 px-0" title="Add new user" style="min-height: 160px">
               <a href="#openAddUser" data-toggle="modal" class="btn btn-fix text-center h-100">
                  <i data-feather="plus" class="h-100 w-25"></i>
               </a>
            </div> <!-- END OF ADD -->
         </div>
      </main>
   </div>
</div>

<!-- EDIT USER -->
<div class="modal fade" id="openEditUser" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form method="post">
         <div class="modal-content bg-white">
            <div class="modal-header bg-warning text-light">
               <h4 class="modal-title font-weight-bold">Edit User</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body form-group">
               <div class="container">
                  <div class="form-label-group">
                     <input class="form-control mb-2" type="text" name="editFirstName" id="editFirstName" placeholder="FIRST NAME" title="First Name" autofocus required />
                     <label for="editFirstName">FIRST NAME</label>
                  </div>
                  <div class="form-label-group">
                     <input class="form-control mb-2" type="text" name="editLastName" id="editLastName" placeholder="LAST NAME" title="Last Name" required />
                     <label for="editLastName">LAST NAME</strong>
                  </div>
                  <select name="editStatus" class="custom-select" title="Status" required>
                     <option value="Regular">Regular</option>
                     <option value="Probationary">Probationary</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer border-0 form-group justify-content-center">
               <button class="btn btn-secondary rounded-circle" type="button" data-dismiss="modal"><i data-feather="x"></i></button>
               <button class="btn btn-primary rounded-circle" type="submit" name="btnEditSave"><i data-feather="check"></i></button>
            </div>
         </div>
      </form>
   </div>
</div>

<!-- ADD NEW USER -->
<!-- TODO: Add error detection on input fields -->
<!-- TODO: Integrate all input (fname, lname). All words should start with an uppercase followed by lowercase. You get the idea. -->
<div class="modal fade" id="openAddUser" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form method="post">
         <div class="modal-content bg-white">
            <div class="modal-header bg-success text-light">
               <h4 class="modal-title font-weight-bold" id="userLabel">Add New User</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body form-group">
               <div class="container">
                  <!-- <div id="errorMessage"></div> -->
                  <div class="form-label-group">
                     <input class="form-control mb-2" type="text" name="addFirstName" id="addFirstName" placeholder="FIRST NAME" autofocus required />
                     <label for="addFirstName">FIRST NAME</label>
                  </div>
                  <div class="form-label-group">
                     <input class="form-control mb-2" type="text" name="addLastName" id="addLastName" placeholder="LAST NAME" required />
                     <label for="addLastName">LAST NAME</label>
                  </div>
                  <select name="addStatus" class="custom-select" required>
                     <option value="" selected disabled>STATUS</option>
                     <option value="Regular">Regular</option>
                     <option value="Probationary">Probationary</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer border-0 form-group justify-content-center">
               <button class="btn btn-secondary rounded-circle" type="button" data-dismiss="modal"><i data-feather="x"></i></button>
               <button class="btn btn-primary rounded-circle" type="submit" name="btnAddSave"><i data-feather="check"></i></button>
            </div>
         </div>
      </form>
   </div>
</div>

<?php include('view/footer.php'); ?>

<script>
   $('#openEditUser').on('shown.bs.modal', function(e) {
      var id = $(e.relatedTarget).data('id'),
         fname = $(e.relatedTarget).data('fname'),
         lname = $(e.relatedTarget).data('lname'),
         status = $(e.relatedTarget).data('status');

      $(e.currentTarget).find('input[name="editFirstName"]').val(fname);
      $(e.currentTarget).find('input[name="editLastName"]').val(lname);
      $(e.currentTarget).find('select[name="editStatus"]').val(status);
      $(e.currentTarget).find('button[name="btnEditSave"]').val(id);
   })
</script>