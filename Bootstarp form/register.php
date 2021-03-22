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

        <!-- PHP VALIDATION -->
        <?PHP

            // veriables
            $ae = false;
                
        if(isset($_POST['submit'])){
            $fristName = $_POST['frist-name'];
            $lastName = $_POST["last-name"];
            $number = $_POST["cell"];
            $age = $_POST["age"];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $r_pass = $_POST['r_pass'];

            // file info
            $file = $_FILES['profile_pic'];
            $photo_Name = $file["name"];
            $tmp_location = $file["tmp_name"];
            $file_size = $file["size"];

             // file Process
            // get extention 
            $file_ex = explode(".", $photo_Name);
            $extension = end($file_ex);
            // unique file name
            $unique_file_name = time() .rand(1, 99999999).$photo_Name; 
            $unique_photo_name = md5($unique_file_name).'.'.'png'; 




            if( empty($fristName) && empty($lasttName) && empty($number) && empty($age) && empty($email) && empty($password) && empty($photo)){
            
                $msg = "<div class=\"col-7 alert alert-danger\"> * All Fields are required <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";
                $ae = true;
            }else if($ae == false){
                if( empty($fristName)){
                    $err['fstName'] = "<div class=\"col-7 alert alert-danger\"> * Frist Name Required <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";

                }
                if( empty($lastName)){
                    $err['lstname'] = "<div class=\"col-7 alert alert-danger\"> * last Name Required <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";

                }
                if( empty($number)){
                    $err['number'] = "<div class=\"col-7 alert alert-danger\"> * Number Required  <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";
            
                }
                if( empty($age)){
                    $err['age'] = "<div class=\"col-7 alert alert-danger\"> * Age Required  <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";
            
                }
                if( empty($email)){
                    $err['email'] = "<div class=\"col-7 alert alert-danger\"> * Email Required  <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";
                    
                }
                if( empty($password)){
                    $err['pass'] = "<div class=\"col-7 alert alert-danger\"> * password Required  <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";

                }
               
                if($password !== $r_pass){
                    $misMatch = "<div class=\"col-7 alert alert-danger\"> *Password Not matched <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";
                }

                if( empty($photo_Name)){
                    $err['photo'] = "<div class=\"col-7 alert alert-danger\"> * A Profile Photo Required  <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";
                    
                }else if(in_array($extension,['jpg','png' ,'gif','jpeg','webp']) == false){

                    $err['file_err'] = "<div class=\"col-7 alert alert-danger\"> * File type not supported <button class=\"close\" data-dismiss=\"alert\">&times;</button></div>";
                }
               
            }else{
                move_uploaded_file( $tmp_location,'media/photos'. $unique_photo_name);
                header("Location: messages\Registration_success.html");
                exit();
                
            }; 
            
           

        }     
        ?>
        



        <section class="form no-gutters py-5" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="img\Register.png" alt="view" class="img-fluid m-auto pt-5">

                    </div>
                    <div class="col-lg-7">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Intel_logo_%282020%2C_dark_blue%29.svg/1200px-Intel_logo_%282020%2C_dark_blue%29.svg.png" alt="" class="img-fluid my-5 logo" height="100px" width="100px">

                        <h2 class="h6 font-weight-bold py-0"> Sign Up to your new account</h2>

                        <?php

                            if(isset($msg)){
                                echo $msg;   
                            }
                            if(isset($err['fstName'])){
                                echo $err['fstName'];   
                            }
                            if(isset($err['lstName'])){
                                echo $err['lstName'];   
                            }
                            if(isset($err['number'])){
                                echo $err['number'];   
                            }
                            
                            if(isset($err['age'])){
                                echo $err['age'];   
                            }
                            
                            if(isset($err['email'])){
                                echo $err['email'];   
                            }
                            
                            if(isset($err['pass'])){
                                echo $err['pass'];   
                            }
                            if(isset($misMatch)){
                                echo $misMatch;
                            }
                            
                            if(isset($err['photo'])){
                                echo $err['photo']; 
                                
                            }
                            if(isset($err['file_err'])){
                                echo $err['file_err']; 
                            }

                            


                        ?>

                        <!-- form -->
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-7">
                                <input type="text" name="frist-name" placeholder="Frist Name" class="form-control">
                            </div>
                            <div class="col-7">
                                <input type="text" name="last-name" placeholder="Last Name" class="form-control">
                            </div>
                            <div class="col-lg-7">
                                <input type="number" name="cell" placeholder="Phone Number" class="form-control">
                            </div>
                            <div class="col-lg-7">
                                <input type="number" name="age" placeholder="Age" class="form-control" max="100" min="10">
                            </div>
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                            </div>
                        
                            <div class="col-lg-7">
                                <input type="password" id="password" name="pass" placeholder="Password" class="form-control">
                                <input type="checkbox" onclick="myFunction()" class="m-2"> Show Password
                            </div>
                            <div class="col-lg-7">
                                <input type="password" id="r_pass" name="r_pass" placeholder="Repeat Password" max="100" class="form-control">
                                <input type="checkbox" onclick="SFunction()" class="m-2"> Show Password
                            </div>
                            <div class="col-lg-7">
                                <p>Your Image</p> 
                                <label for="profile_pic" style="cursor: pointer;">
                                <img src="img\upload.png" alt="" height="40px" width="40px">
                                </label>
                                <input type="file" name="profile_pic" class="form-control" id="profile_pic" style="display: none;">
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

        <script src="functions.js"></script></script>

    </body>
</html>