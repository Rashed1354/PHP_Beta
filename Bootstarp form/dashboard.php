

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Student CRUDV</title>

     <!-- Favicon  -->
     <link rel="icon" href="assets/img/favicon-16x16.png">


     <!-- FontAwesome CSS  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <!-- JS FILES  -->
     <script src="assets/js/custom.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	


     <!-- Main CSS   -->
     <link rel="stylesheet" href="CSS/style.css">

     <!-- Responsive CSS     -->
     <link rel="stylesheet" href="CSS/responsive.css">

</head>

<body>

     <div id="wrapper" class="menuDisplayed">
          <!-- sidebar  -->
        <div id="sidebar-wrapper">

<div class="logo">
    <i class="fas fa-user-graduate"></i>
    <span>Students CRUDV Application</span>
</div>
<ul class="sidebar-nav">
    <li><a href="student_view.php"><i class="fas fa-user-graduate"></i> All Student</a></li>
    <li><a href="main_system/add_student.php"><i class="fas fa-user-plus"></i> Add Student</a></li>
    <li><a href="student_trash.php"><i class="far fa-trash-alt"></i> Trash</a></li>
</ul>

<div class="logo">
    <i class="fas fa-user-graduate"></i>
    <span>Teachers CRUDV Application</span>
</div>
<ul class="sidebar-nav">
    <li><a href="teacher_view.php"><i class="fas fa-user-graduate"></i> All Teachers</a></li>
    <li><a href="teacher_add.php"><i class="fas fa-user-plus"></i> Add Teachers</a></li>
    <li><a href="teacher_trash.php"><i class="far fa-trash-alt"></i> Trash</a></li>
</ul>

<div class="logo">
    <i class="fas fa-user-graduate"></i>
    <span>Staffs CRUDV Application</span>
</div>
<ul class="sidebar-nav">
    <li><a href="staff_view.php"><i class="fas fa-user-graduate"></i> All Staffs</a></li>
    <li><a href="staff_add.php"><i class="fas fa-user-plus"></i> Add Staff</a></li>
    <li><a href="staff_trash.php"><i class="far fa-trash-alt"></i> Trash</a></li>
    <li><a href="index.php">Logout</a></li>

</ul>
</div>
          <!-- Page content  -->
          <div id="page-content-wrapper">
               <div class="container-fluid">

                    <div class="row">
                         <div class="col-lg-12">
                              <p class="page-title bg-info"><a href="#" class="btn btn-success" id="menu-toggle"><i class="fas fa-bars"></i></a> <span class="span-title"> <i class="fas fa-user-plus"></i></i> All Student</span></p>

                              <form class="form-inline float-right" action="" method="POST">
                                   <div class="form-group mx-sm-3 mb-2">
                                        <label for="search_1" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="search" id="search_1" placeholder="Search..">
                                   </div>
                                   <button type="submit" name="search-btn" class="btn btn-info mb-2">Search</button>
                              </form>
                              <table class="table table-striped">
                                   <thead>
                                        <tr>
                                             <th scope="col">SL</th>
                                             <th scope="col">Name</th>
                                             <th scope="col">Email</th>
                                             <th scope="col">Phone Number</th>
                                             <th scope="col">Photo</th>
                                             <th scope="col">Operation</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                                                           </tbody>
                              </table>
                         </div>

                    </div>
               </div>

          </div>
     </div>



     

     <script>
          $("#menu-toggle").click(function(e) {

               e.preventDefault();
               $("#wrapper").toggleClass("menuDisplayed");

          });

          $('.delete_btn').click(function() {
               let confirmation = confirm('Are you sure ?');

               if (confirmation == true) {
                    return true;
               } else {
                    return false;
               }

          });
     </script>
</body>

</html>