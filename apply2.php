  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $a=$_REQUEST['t1'];
    $b=$_REQUEST['t2'];
    $c=$_REQUEST['t3'];
    $e=$_REQUEST['t5'];
    $y=$c*12;
  
    $con=mysqli_connect('localhost','root','','finance2');
    $q="select * from login2 where Mobile='$a'";
    $rl=mysqli_query($con,$q);
    $row=mysqli_fetch_array($rl);
    $d=$row['Name'];
    $q1="insert into loan values(Null,'$d','$a','$b','$y','7.2','$e','$y','ongoing')";
    $rl1=mysqli_query($con,$q1);
    if($rl1)
    {
      echo"<script>alert('Your loan application submitted successfully'),window.location='loan.php'</script>";
    }
    
    ?>
    
</body>
</html>