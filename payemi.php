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
        margin-left:40px;

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
    

$s=mysqli_query($con,"select * from loan where Mobile='$user' and status='ongoing'");

$s2=mysqli_fetch_array($s);

$loanid=$s2["id"];
$emileft=$s2["emileft"];
$amount=$s2["amount"];
$duration=$s2["duration"];
$emi=$s2["emi"];

$eminumber=($duration-$emileft)+1;



echo"<div class='a2'>
</div>
<div class='a3'>

<div class='x'>Loan Account Number:$loanid</div><br>
<div class='x'>Loan Amount:$amount</div><br>
<div class='x'>EMI Left:$emileft</div><br>
<div class='x'>Your EMI Number:$eminumber</div><br>
<div class='x'>EMI: $emi</div><br>
<form action='payemi2.php'>
<table style='color:white;'>
<h2 style='color:cream;margin-left:40px'>Payment options:</h2>
<tr><td style='margin-left:40px'><input type='radio' name='a' value='p' style='margin-left:40px'>Phonepe</td>
<td style='padding-left:20px'><input type='radio' name='a' value='p'>Google Pay</td></tr>
<tr><td><input type='radio' name='a' value='p' style='margin-left:40px'>Card</td>
<td style='padding-left:20px'><input type='radio' name='a' value='p'>Paytm</td></tr></table>
<input type='submit' value='pay now' style='background-color:green;color:white;margin-top:10px;margin-left:40px'>
</form>
</div>
";
?>
    
</body>
</html>