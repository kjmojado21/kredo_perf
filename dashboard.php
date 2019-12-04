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
               <h4 class="">Kyle Nurville</h4>
               <p class="text-muted">Other details of this person</p>
            </div>
            <div class="btn-group">
               <button class="btn btn-secondary btn-sm" type="button">Select teacher</button>
               <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">
                  <span class="sr-only">Toggle Dropdown</span>
               </button>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Teacher 1</a>
                  <a class="dropdown-item" href="#">Teacher 2</a>
                  <a class="dropdown-item" href="#">Teacher 3</a>
                  <a class="dropdown-item" href="#">Teacher 4</a>
               </div>
            </div>
         </div> <!-- END OF FIRST SECTION -->
         <!--
   TODO:
   * remove style=bg of card elements
   * create new bg classes on CSS (!important)
   * finalize layout of dashboard
   * allocate space for Name of teacher on first section
   
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