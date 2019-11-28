<!doctype html>
<html lang="en">

<head>
   <title></title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link rel="stylesheet" href="css/dashboard.css">

   <!-- Feather icons -->
   <script src="https://unpkg.com/feather-icons"></script>

   <style>
      .shadow {
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
      }
   </style>
</head>

<body>
   <!-- TOP NAVIGATION BAR -->
   <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-2 shadow">
      <a class="navbar-brand col-3 col-md-2 mr-0" href="#">
         <!-- TODO: insert kredo logo <img src="" alt="Kredo Cebu logo"> -->
         Kredo IT Dept
      </a>
      <ul class="navbar-nav px-3">
         <li class="nav-item text-nowrap">
            <a class="nav-link text-danger" href="#">Sign out</a>
         </li>
      </ul>
   </nav>

   <div class="container-fluid">
      <div class="row">
         <!-- SIDEBAR (LEFT) -->
         <div class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
               <ul class="nav flex-column">
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
                     <a class="nav-link" href="courses.php">
                        <i data-feather="list"></i>
                        Course
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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom">
               <div class="btn-group">
                  <button class="btn btn-secondary btn-sm text-left" type="button">Select teacher</button>
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
            </div> <!-- END OF DROPDOWN CONTAINER-->
            <div class="container-fluid mt-4">
               <div class="row mt-3">
                  <div class="card py-5 col-md m-3 bg-transparent border">
                     <a class="card-block stretched-link text-decoration-none" href="">
                        <h6 class="lead text-truncate">Attendance</h6>
                     </a>
                  </div>
                  <div class="card py-5 col-md m-3 bg-transparent border">
                     <a class="card-block stretched-link text-decoration-none" href="">
                        <h6 class="lead text-truncate">Evaluation</h6>
                     </a>
                  </div>
                  <div class="card py-5 col-md m-3 bg-transparent border">
                     <a class="card-block stretched-link text-decoration-none" href="">
                        <h6 class="lead text-truncate">Management</h6>
                     </a>
                  </div>
                  <div class="card py-5 col-md m-3 bg-transparent border">
                     <a class="card-block stretched-link text-decoration-none" href="">
                        <h6 class="lead text-truncate">Student Survey</h6>
                     </a>
                  </div>

               </div>
         </main>
      </div>
   </div>


   <!-- Optional JavaScript -->
   <script>
      feather.replace()
   </script>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>