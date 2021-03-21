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
      if(isset($_POST['submit'])){
         $fristName = $_POST['frist-name'];
         $lastName = $_POST["last-name"];
         $number = $_POST["cell"];
         $age = $_POST["age"];
         $email = $_POST['email'];
         $password = $_POST['pass'];
         $photo = $_FILES['profile_pic'];

         echo $file = $photo["name"];
      }

    ?>
    



    <section class="form no-gutters py-5" >
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="https://cdn0.iconfinder.com/data/icons/academics-glyph-black/2048/Register-512.png" alt="view" class="img-fluid m-auto pt-4">

                </div>
                <div class="col-lg-7">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Intel_logo_%282020%2C_dark_blue%29.svg/1200px-Intel_logo_%282020%2C_dark_blue%29.svg.png" alt="" class="img-fluid my-5 logo" height="100px" width="100px">

                    <h2 class="h6 font-weight-bold py-0"> Sign Up to your new account</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-row">
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
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="col-lg-7">
                            <input type="password" name="pass" placeholder="Password" class="form-control mb-3">
                        </div>
                        <div class="col-lg-7">
                            <p>Your Image</p> 
                            <label for="profile_pic" style="cursor: pointer;">
                              <img src="" alt="" height="40px" width="40px">
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
</body>
</html>