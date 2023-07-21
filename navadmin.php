<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Document</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
       
    </head>
<body>
<?php
    Session_Start();
    if(isset($_SESSION['a1']))
    {
        $con=mysqli_connect('localhost','root','','finance2');
        $user=$_SESSION['a1'];
        $q="select * from login2 where Mobile='$user'";
        $rl=mysqli_query($con,$q);
        $row=mysqli_fetch_array($rl);
        $name=$row['Name'];
        
        $type=$row['type'];
    }
    else{
        header("location:sign in.php");
    }
    
    ?>
    
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!--<a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index admin.php">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="emi.php">EMI calculator</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin.php">View clients</a></li>
                        <li class="nav-item"><a class="nav-link" href="viewloan.php">View loans</a></li>
                        <li class="nav-item"><a class="nav-link" href="accountsection.php">Account section</a></li>
                        <li class="nav-item"><a class="nav-link" href="adminmsg.php">Messages</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout project.php">Logout</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    
</body>
</html>