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
                     <a class="nav-link" href="#">
                        <i data-feather="settings"></i>
                        Settings
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <style>
            .card:hover{
               background-color: #f5f5f5;
            }
         </style>

         <!-- MAIN (RIGHT) -->
         <main role="main" class="ml-sm-auto col-md-10 px-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom">
               <!-- justify-content-between -->
               <h1 class="display-4">Users</h1>
            </div> <!-- END OF SECTION -->
            <div class="mt-4 d-flex flex-wrap">
               <div class="card col-md-3 m-4 px-0">
                  <div class="card-header text-muted">
                     Basic/Dev/Adv
                     <div class="btn-group float-right" role="group">
                        <a data-toggle="collapse" data-toggle="tooltip" title="Edit user" class="btn btn-sm btn-outline-secondary" href="#viewUser" aria-expanded="false" aria-controls="tempEdit"><i data-feather="edit-3" alt="Edit"></i></a>
                        <a data-toggle="collapse" data-toggle="tooltip" title="Remove user" class="btn btn-sm btn-outline-danger" href="#removeUser" aria-expanded="false" aria-controls="tempRemove"><i data-feather="trash" alt="Remove"></i></a>
                        <!-- href="removeUser< ?= $user['id] ?> -->
                     </div>
                  </div>
                  <a href="#viewUser" data-toggle="modal" class="btn btn-fix text-center p-0">
                     <div class="card-body">
                        <h5 class="">Kyle Nurville Jaham</h5>
                        <p class="small text-muted">Other details of this person</p>
                     </div>
                  </a>
                  <div class="collapse bg-dark text-light text-center" id="removeUser">
                     <div class="card-body text-center">Are you sure you want to remove Kyle?</div>
                     <a class="btn btn-sm btn-secondary ml-2 mb-2" data-toggle="collapse" href="#removeUser" aria-expanded="false">No</a>
                     <a class="btn btn-sm btn-primary ml-2 mb-2" href="">Yes</a>
                     <!-- #removeUser< ?= $user['id'] ?> -->
                     <!-- btn-YES href=< ?= base_url('users/deleteUser/' . $user['id'] . '/' . $user['username']); ?> -->
                  </div>



               </div> <!-- END OF CARD (USERS FROM DB) -->
               <div class="card col-md-3 m-4 px-0" title="Add new user">
                  <a href="#addUser" data-toggle="modal" class="btn btn-fix text-center h-100">
                     <i data-feather="plus" class="h-100 w-25"></i>
                  </a>
               </div> <!-- END OF ADD -->
            </div> <!-- END OF FLEX WRAP -->
         </main>
      </div>
   </div>


   <!-- MODALS -->
   <div class="modal fade" id="viewUser" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <form id="editUserForm">
            <div class="modal-content bg-white">
               <div class="modal-header bg-warning">
                  <h5 class="modal-title" id="">Edit User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body form-group">
                  <div class="container">
                     <strong>First name</strong>
                     <input class="form-control mb-2" type="text" id="addFirstname" value="Kyle Nurville" autofocus required />
                     <strong>Last name</strong>
                     <input class="form-control mb-2" type="text" id="addLastname" value="Jaham" required />
                     <strong>Type</strong>
                     <select name="title" id="addTitle" class="form-control">
                        <option value="Basic">Basic</option>
                        <option value="Dev">Dev</option>
                        <option value="Adv">Adv</option>
                        <option value="Adv">Intern</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer form-group">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit" id="btnSubmit">Save</button>
               </div>
            </div>
         </form>
      </div>
   </div>

   <div class="modal fade" id="addUser" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <form id="addUserForm">
            <div class="modal-content bg-white">
               <div class="modal-header bg-warning">
                  <h5 class="modal-title" id="userLabel">Add New User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body form-group">
                  <div class="container">
                     <div id="errorMessage"></div>
                     <strong>First name</strong>
                     <input class="form-control mb-2" type="text" id="addFirstname" autofocus required />
                     <strong>Last name</strong>
                     <input class="form-control mb-2" type="text" id="addLastname" required />
                     <strong>Type</strong>
                     <select name="title" id="addTitle" class="form-control">
                        <option value="Basic">Basic</option>
                        <option value="Dev">Dev</option>
                        <option value="Adv">Adv</option>
                        <option value="Adv">Intern</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer form-group">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit" id="btnSubmit">Save</button>
               </div>
            </div>
         </form>
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