<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    Session_Start();
    $a=$_GET['t1'];
    $b=$_GET['t2'];
    $con=mysqli_connect('localhost','root','','finance2');
    $q="select * from login2";
    $rl=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rl))
    {
        if($row['Mobile']==$a && $row['Password']==$b && $row['type']=='admin')
        { $_SESSION['a1']=$a;
        
            echo"<script>
            
        
            window.location='admin.php';
            </script>";
        }
        else if($row['Mobile']==$a && $row['Password']==$b && $row['type']=='user')
        {
            $_SESSION['k1']=$a;
            echo"<script>
            window.location='user.php';
            </script>";
        }
        
    }
    echo"
   
    <script>
    alert('invalid');
    window.location='sign in.php';
    </script>";
    
    ?>
    
</body>
</html>