<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            background-image:url('loan3.jpg');
            background:cover ;
            background-repeat:no-repeat;

           

        }
        .a2{
            width:370px;
    height:389px;
    background-color:black;
    opacity: 0.4;
    position:absolute;

    top:120px;
    
    left:400px;
          
}
.a3{
    width:370px;
    height:389px;
    
    position:absolute;

    top:120px;
    
    left:400px;
    box-shadow: 5px 8px 9px black;
    color:white;

}
.z{
    width:90%;
    height:50px;
    margin-top:20px;
    margin-left:10px;
    border-radius:12px;
    border:2px solid white;
    background:transparent;
    color:white;
}
::placeholder{
color:white;
opacity:1;
}
.t{
    background-color:blue;
    width:90%;
    color:white;
    align:center;
    margin-top:20px;
    margin-left:10px;
    height:50px;
    border-radius:12px;


}
.t2{
    background-color:green;
    width:50%;
    color:white;
    align:center;
    margin-top:20px;
    margin-left:90px;
    height:50px;
    border-radius:12px;
    
}
.t4{
    text-decoration:none; 
    padding-bottom:5px;
}
.t4:hover{
    text-decoration:underline;


}
.t5{
    background-color:gray;
    width:70%;
}

        </style>
        
</head>
<body>
<?php
include("navuser.php");

    
    echo"<p style='color:white;margin-top:50px'>Welcome,$name</p>";
    
$a=$_GET['t1'];
$b=$_REQUEST['t2'];
$c=$_REQUEST['t3'];
$e=$_REQUEST['t5'];


$i=0.072;
$x=$b+($i*$c);
$y=$c*12;
$e=round($x/$y,2);
$con=mysqli_connect('localhost','root','','finance2');
$q="select * from customer where Mobile='$a'";
$rl=mysqli_query($con,$q);
$row=mysqli_fetch_array($rl);
$s=$row['income'];
$m=$s/12;
$h=$m/2;


echo"<div class='a2'>
</div>

 <div class='a3'>
 <p style='margin-top:50px;margin-left:50px;font-size:20px'>Your Loan Amount: $b</p>
 <p style='margin-top:50px;margin-left:50px;font-size:20px'>Interest: 7.2% per year</p>
 <p style='margin-top:50px;margin-left:50px;font-size:20px'>EMI:$e per month </p><br>
 <a href='apply2.php?t1=$a && t2=$b && t3=$c&& t5=$e'><input type='submit' value='Click here to submit your loan application' style='background-color:green;color:white;margin-left:30px'/></a>
     
   
   
 </div>";
?>
</body>
</html>
