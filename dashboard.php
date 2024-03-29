<!-- TODO: Create LOAD TEACHERS function on db_connection / functions -->
<?php
include('db_connection.php');

$loadTeachers = mysqli_query($conn, "SELECT * FROM teachers ORDER BY teacher_id;");

?>

<?php include('view/header.php'); ?>

<title>Dashboard</title>
<style>
   .card .card-footer {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
   }
</style>

<div class="container-fluid">
   <div class="row">
      <!-- SIDEBAR (LEFT) -->
      <div class="col-md-2 d-none d-md-block bg-light sidebar">
         <div class="sidebar-sticky ml-2">
            <ul class="nav flex-column text-truncate">
               <li class="nav-item">
                  <a class="nav-link active" href="#">
                     <i data-feather="home"></i>
                     Dashboard
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="users.php">
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
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-5 pb-2 border-bottom">
            <div>
               <h4 class="teacherName">------</h4>
               <p class="text-muted teacherStatus">------</p>
            </div>

            <div class="btn-group dropleft">
               <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select teacher
               </button>
               <div class="dropdown-menu">
                  <?php
                  while ($rowD = mysqli_fetch_array($loadTeachers)) {
                     $id = $rowD['teacher_id'];
                     ?>
                     <a class="dropdown-item" data-id="<?= $id; ?>" data-status="<?= $rowD['stat']; ?>" href="#"><?= $rowD['teacher_fname'] . " " . $rowD['teacher_lname']; ?></a>
                  <?php } ?>
               </div>
            </div>
         </div> <!-- END OF FIRST SECTION -->
         <!--
            TODO:
            *  remove style=bg of card elements
               create new bg classes on CSS (!important)
            * finalize layout of dashboard
            -->
         <div class="container-fluid row">
            <div class="card col-md-4 m-2 px-0 border-0">
               <a href="#" class="btn p-0 text-light">
                  <div class="card-body" style="background-color: #1abc9c">
                     <h6 class="display-4">30%</h6>
                  </div>
                  <div class="card-footer lead" style="background-color: #16a085">
                     ATTENDANCE
                  </div>
               </a>
            </div>
            <div class="card col-md m-2 px-0 border-0">
               <a href="#" class="btn p-0 text-light">
                  <div class="card-body" style="background-color: #e67e22">
                     <h6 class="display-4">-</h6>
                  </div>
                  <div class="card-footer lead" style="background-color: #d35400">
                     EVALUATION
                  </div>
               </a>
            </div>
            <div class="card col-md m-2 px-0 border-0">
               <a href="#" class="btn p-0 text-light">
                  <div class="card-body" style="background-color: #3498db">
                     <h6 class="display-4">20%</h6>
                  </div>
                  <div class="card-footer lead" style="background-color: #2980b9">
                     MANAGEMENT SCORE
                  </div>
               </a>
            </div>
         </div>

         <div class="container-fluid row mb-5">
            <div class="card col-md-4 m-2 px-0 border-0">
               <a href="#" class="btn p-0 text-light">
                  <div class="card-body" style="background-color: #f1c40f">
                     <h6 class="display-4">30%</h6>
                  </div>
                  <div class="card-footer lead" style="background-color: #f39c12">
                     STUDENT SURVEY
                  </div>
               </a>
            </div>
            <div class="card col-md m-2 px-0 text-center">
               <div class="card-body" style="">
                  <h6 class="display-4">100%</h6>
               </div>
               <div class="card-footer lead" style="">TOTAL</div>
            </div>
         </div>

      </main>
   </div>
</div>

<?php include('view/footer.php'); ?>

<script>
   $('.dropdown-menu a').on('click', function() {
      $('.teacherName').text($(this).text());
      $('.teacherStatus').text($(this).data('status'));
   });
</script>