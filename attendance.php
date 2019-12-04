<?php include('view/header.php'); ?>
<title>Attendance</title>

<style>
   td:nth-child(n+3) {
      height: 60px;
      padding: 0 !important;
   }

   td button {
      height: 100%;
      width: 100%;
      border: 0;
      background-color: transparent;
   }

   td {
      text-align: center;
   }

   .table-dark:hover {
      background-color: #343a40 !important;
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
                  <a class="nav-link" href="users.php">
                     <i data-feather="users"></i>
                     Users
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="#">
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
               <h1 class="display-4 text-muted">Attendance</h1>
            </i>
         </div> <!-- END OF FIRST SECTION -->

         <table id="attendanceTable" class="table table-bordered table-hover" style="width:100%">
            <thead class="table-dark">
               <tr>
                  <th class=""></th>
                  <th class="">Name</th>
                  <th class="text-success">PRESENT</th>
                  <th class="text-warning">LATE</th>
                  <th class="text-danger">ABSENT</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1</td>
                  <td>
                     <h6>Juan dela Cruz</h6>
                     <p>Dev teacher</p>
                  </td>
                  <td><button></button></td>
                  <td><button></button></td>
                  <td><button></button></td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>
                     <h6>Maria Reyes</h6>
                     <p>Dev teacher</p>
                  </td>
                  <td><button></button></td>
                  <td><button></button></td>
                  <td><button></button></td>
               </tr>
               <tr>
                  <td>3</td>
                  <td>
                     <h6>Pepito dela Cerna</h6>
                     <p>Dev teacher</p>
                  </td>
                  <td><button></button></td>
                  <td><button></button></td>
                  <td><button></button></td>
               </tr>
            </tbody>
         </table>
      </main>
   </div>
</div>



<script>
   $(document).ready(function() {
      var attendanceTable = $('#attendanceTable').DataTable({
         "columnDefs": [{
            "width": "60px",
            "targets": [2, 3, 4]
         }],
         "info": false,
         "paging": false
      });

      $('#attendanceTable tbody').on('click', 'button', function() {
         var colIdx = attendanceTable.cell($(this).parent('td')).index().column;
         var rowIdx = attendanceTable.cell($(this).parent('td')).index().row;

         if (colIdx == 2) {
            if ($(this).hasClass('bg-success')) {
               $(this).removeClass('bg-success');
            } else {
               $(attendanceTable.cell(rowIdx, 3).node()).children().removeClass();
               $(attendanceTable.cell(rowIdx, 4).node()).children().removeClass();

               $(this).addClass('bg-success');
            }

         } else if (colIdx == 3) {
            if ($(this).hasClass('bg-warning')) {
               $(this).removeClass('bg-warning');
            } else {
               $(attendanceTable.cell(rowIdx, 2).node()).children().removeClass();
               $(attendanceTable.cell(rowIdx, 4).node()).children().removeClass();

               $(this).addClass('bg-warning');
            }
         } else if (colIdx == 4) {
            if ($(this).hasClass('bg-danger')) {
               $(this).removeClass('bg-danger');
            } else {
               $(attendanceTable.cell(rowIdx, 2).node()).children().removeClass();
               $(attendanceTable.cell(rowIdx, 3).node()).children().removeClass();

               $(this).addClass('bg-danger');
            }
         }
      });
   });
</script>

<?php include('view/footer.php'); ?>