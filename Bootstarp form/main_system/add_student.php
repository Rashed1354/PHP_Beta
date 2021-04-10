

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon-16x16.png">

    <!-- SlickNav CSS  -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">

    <!-- Owl Carousel CSS  -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- FontAwesome CSS  -->
    <link rel="stylesheet" href="assets/fonts/fontAwesome/css/all.min.css">



    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <!-- Main CSS   -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive CSS     -->
    <link rel="stylesheet" href="assets/css/responsive.css">

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
        <li><a href="student_add.php"><i class="fas fa-user-plus"></i> Add Student</a></li>
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
                <p class="page-title bg-info"><a href="#" class="btn btn-success" id="menu-toggle"><i class="fas fa-bars"></i> Menu </a> <span class="span-title"> <i class="fas fa-user-plus"></i></i> Add New Student</span></p>

                                        <div class="card shadow mx-auto col-md-6">
                    <div class="card-body p-4">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label" for="name">Student Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="">
                            </div><br>
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="">
                            </div><br>
                            <div class="form-group">
                                <label class="form-label" for="pNumber">Phone Number</label>
                                <input type="text" class="form-control" id="pNumber" name="pNumber" value="">
                            </div><br>
                            <div class="form-group">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="">
                            </div><br>

                            <div class="form-group">
                                <label for="">Location</label>
                                <select class="form-control" name="location" value="" id="">
                                    <option>-- Select Location --</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Sylhet">Sylhet</option>
                                </select>
                            </div>

                            <br>

                            <div class="form-group">
                                <label class="form-label" for="age">Age</label>
                                <input type="text" id="age" name="age" class="form-control" value="">
                            </div><br>

                            <div class="form-group">
                                <label for="">Gender</label> <br>
                                <input name="gender" type="radio" checked value="Male" id="Male"> <label for="Male">Male</label>
                                <input name="gender" type="radio" value="Female" id="Female"> <label for="Female">Female</label>
                            </div> <br>

                            <div class="form-group">
                                <label for="">Course</label>
                                <select class="form-control" name="course" id="" value="">
                                    <option value="">-- Select Course --</option>
                                    <option value="Photoshop">Photoshop</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Android Development">Android Development</option>
                                    <option value="Ethical Hacking">Ethical Hacking</option>
                                    <option value="Data Analysis">Data Analysis</option>
                                    <option value="Auto CAD">Auto CAD</option>
                                </select>
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="">Profile Photo</label> <br>
                                <img id="load_student_photo" style="max-width:100% ;" src="" alt="">
                                <br>
                                <label for="student_photo" id="student_up"> <img width="100" src="assets/img/uloadphoto.png" alt=""></label>
                                <input id="student_photo" name="photo" value="" style="display:none;" class="form-control" type="file">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for=""></label>
                                <input name="stc" class="btn btn-primary" type="submit" value="Add student">


                            </div>
                        </form>


                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
</div>



<!-- JS FILES  -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

<script>
$("#menu-toggle").click(function(e) {

    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");

});

$('#student_photo').change(function(e) {

    let file_url = URL.createObjectURL(e.target.files[0]);
    $('#load_student_photo').attr('src', file_url);
    $("#student_up").hide();

});
</script>
</body>

</html>
</body>

</html>