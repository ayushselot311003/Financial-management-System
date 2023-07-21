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
    
    
   
    
    
    include('navuser.php');
    echo"<p style='color:white;margin-top:50px'>Welcome,$name</p>";
    
    $q1="select * from loan where Mobile='$user'";
    $rl1=mysqli_query($con,$q1);
    $row1=mysqli_fetch_array($rl1);
    echo"<div class='a2'>
</div>

 <div class='a3'>
 <p style='margin-top:50px;margin-left:50px;font-size:20px'>Name: $name</p>
 <p style='margin-top:10px;margin-left:50px;font-size:20px'>Loan Amount:$row1[amount]</p>
 <p style='margin-top:10px;margin-left:50px;font-size:20px'>Loan duration:$row1[duration] </p>
 <p style='margin-top:10px;margin-left:50px;font-size:20px'>Loan Interest:$row1[interest] </p>
 <p style='margin-top:10px;margin-left:50px;font-size:20px'>EMI left:$row1[emileft] </p><br>
 <a href='viewemi.php'><input type='submit' value='view emi' style='background-color:green;color:white;margin-left:30px'/></a>
     
   
   
 </div>";

    

    
    ?>
    
</body>
</html>