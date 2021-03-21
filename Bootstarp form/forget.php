
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://iconarchive.com/download/i66645/designbolts/free-valentine-heart/Heart.ico">
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
            background-color: rgb(220, 226, 226);
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
    <section class="form py-5 mx-auto">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img src="https://img.freepik.com/free-vector/forgot-password-concept-illustration_114360-1123.jpg?size=338&ext=jpg" alt="view" class="img-fluid vector">

                </div>
                <div class="col-lg-7">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Intel_logo_%282020%2C_dark_blue%29.svg/1200px-Intel_logo_%282020%2C_dark_blue%29.svg.png" alt="" class="img-fluid my-5 logo" height="100px" width="100px">
                    <h2 class="h6 font-weight-bold py-0"> Reset Password of your account</h2>
                    
                  

                    <form action="" method="POST">
                        <from class="form-row">
                            <div class="col-lg-7 py-4">
                                <input type="email" name="email" placeholder="Enter Email or Username" class="form-control py-3">
                            </div>
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-primary px-7 py-lg-2" name="submit"> Send reset Code</button>                         
                            </div>
                    </form>
                    <div class="col-lg-7">
                        <p> Remembered the Password? <a href="index.php">login</a></p>
                    </div>
                    
                </div>
            </div>
        </div> 
    </section>
</body>
</html>

