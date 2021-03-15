<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- css -->
    <style>
        *{
        box-sizing: border-box;
        }

        body{
            background-color:rgb(220, 226, 226);
        }

        .row{
            background-color: white;
            border-radius: 30px;
        }

        .vector{
            border-top-left-radius: 30px ;
            border-bottom-left-radius: 30px ;
            margin-left: -15px;
        }
    </style>

</head>
<body>

<!--PHP validation -->
<?php
    if(isset($_POST['insert'])){

      $name = $_POST['frist-Name'];
      $lname = $_POST['last-name'];
      $email = $_POST['email'];
      $cell = $_POST['cell'];
      $age = $_POST['age'];
      $password = $_POST['pass'];

      $cell_start = substr($cell, 0, 3);//cell manage

      if(empty($name)){
        $err['name'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }
      if(empty($email)){
        $err['email'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }
      if(empty($cell)){
        $err['cell'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }
      if(empty($age)){
        $err['age'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }
      if(empty($password)){
        $err['age'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }
      

    /**Form input validation for all input**/
      if( empty($name) || empty($email) || empty($cell) || empty($age) ){

        $msg = " <p class='alert alert-danger alert-dismissible fade show' role='alert'>All information are required! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//warning for not entering any or all information

      }
      else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>Invalid Email Address! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Email validation warning
      }
      else if($cell>19999999999 || $cell<01300000000){
        $msg = " <p class='alert alert-danger alert-dismissible fade show' role='alert'>Invalid phone number input data type! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//warning for not entering integer value as phone number
      }
      else if(in_array($cell_start, ['017','018','019','015','013','016','014'])==false){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>Invalid phone number! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Phone number validation warning
      }
      else if($spec_mail != 'yahoo.com'){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>The Email Address must be of Yahoo! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Specific Email address validation
      }
      else if($age < 18 && $age > 39){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>Only people aged 18 to 39 are allowed to sign in! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Specific age category validation
      }
      else
        $msg = "<p class='alert alert-success alert-dismissible fade show' role='alert'>You're good to go! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Success validation message
      }
  ?>

    <section class="form no-gutters py-4" >
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="https://image.freepik.com/free-vector/access-control-system-abstract-concept_335657-3180.jpg" alt="view" class="img-fluid vector">

                </div>
                <div class="col-lg-7">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Intel_logo_%282020%2C_dark_blue%29.svg/1200px-Intel_logo_%282020%2C_dark_blue%29.svg.png" alt="" class="img-fluid my-5 logo" height="100px" width="100px">

                    <?php 
                        if(isset($msg)){

                            echo "<div class=\"alert alert-danger col-lg-7\" role=\"alert\">
                            $msg
                          </div>";

                        }if(isset($err['name'])){
                            echo "['name'] $err";
                        }

                        echo "$name";
                       

                    ?>

                    <h2 class="h6 font-weight-bold py-0"> Sign Up to your new account</h2>
                    <form action="" method="POST">
                        <from class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="frist-name" placeholder="Frist Name" class="form-control">
                        </div>
                        <div class="col-lg-7">
                            <input type="text" name="last-name" placeholder="Last Name" class="form-control">
                        </div>
                        <div class="col-lg-7">
                            <input type="text" name="cell" placeholder="Phone Number" class="form-control">
                        </div>
                        <div class="col-lg-7">
                            <input type="number" name="age" placeholder="Age" class="form-control">
                        </div>
                        <div class="col-lg-7">
                            <input type="email" name="email" placeholder="Email" class="form-control mt-3">
                        </div>
                        <div class="col-lg-7">
                            <input type="password" name="pass" placeholder="Password" class="form-control mb-3">
                        </div>
                        <div class="col-lg-7">
                            <button type="submit" class="btn btn-primary px-7 py-lg-2" name="submit">Sign up </button>                         
                        </div>
                    </form>
                    <div class="col-lg-7">
                        <a href="forget.php"> Forget password</a>
                        <p> Already have a Account? <a href="index.php">Login</a></p>
                    </div>
                    
                </div>
            </div>
        </div> 
    </section>
</body>
</html>
