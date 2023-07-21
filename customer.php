<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=$_GET['c1'];
    $b=$_GET['c2'];
    $c=$_GET['c3'];
    $d=$_GET['c4'];
    $e=$_GET['c5'];
    $f=$_GET['c6'];
    $g=$_GET['c7'];
    $h=$_GET['c8'];
    $i=$_GET['c9'];
    $j=$_GET['c10'];
    $k=$_GET['c11'];
    $l=$_GET['c12'];
    $n=$_GET['c13'];
    $con=mysqli_connect('localhost','root','','finance2');
    $q1="insert into login2 values('NULL','$a','$b','$n','user')";
    $rl1=mysqli_query($con,$q1);
    $p="select * from login2  where Mobile='$b' ";
    $rl2=mysqli_query($con,$p);
    $p1=mysqli_fetch_array($rl2);
    $cid=$p1['ID'];
    $q2="insert into customer values('NULL','$cid','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','user')";
    $rl3=mysqli_query($con,$q2);
    if($rl3)
    {
        echo"<script>
        window.location='sign in.php';
        
        </script>";
    }
    else{
        echo"alert('error');
        <script>
        window.location='sign up.php';
        
        </script>";

    }

    ?>
    
</body>
</html>