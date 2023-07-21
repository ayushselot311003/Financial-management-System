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
        .x{
            color:white;
            margin-top:10px;

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
include('navuser.php');
echo"<p style='color:white;margin-top:50px'>Welcome,$name</p>";
    

$s=mysqli_query($con,"select * from loan where Mobile='$user' order by id desc");

$s2=mysqli_fetch_array($s);

$loanid=$s2['id'];
$emileft=$s2['emileft'];
$duration=$s2['duration'];


echo"<p style='color:white;margin-top:90px'>hi $name, here are the details of your loan account number $loanid</p><br>";
$q2="select * from emi where loanid=$loanid";

$z=mysqli_query($con,$q2);

$count=mysqli_num_rows($z);


while($z1=mysqli_fetch_array($z)){

   $i=$z1['installment'];
   $d= $z1['date'];
    


    echo"<div class='x'>$i installment on $d</div>";
}

if($emileft=="0"){
    echo"loan cleared <a href='user.php'><input type='submit' value='Apply for a new loan' style='background-color:green;color:white'></a>";
}
else{
   echo" <a href='payemi.php'><input type='submit' value='Pay your next EMI' style='background-color:green;color:white'></a>";
}


?>
    
</body>
</html>