<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=$_GET['t1'];
    $b=$_GET['t2'];
    $c=$_GET['t3'];
    $d=$_GET['t4'];
    $con=mysqli_connect('localhost','root','','finance2');
    $q="insert into contact values('$a','$b','$c','$d')";
    
    $rl=mysqli_query($con,$q);
    if($rl)
    {
        echo" <script>
        window.location='index project.php';
        </script>";
        
    }

    
    ?>
    
</body>
</html>