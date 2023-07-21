<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include('navadmin.php');
    
    ?>
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
      echo"<p style='color:white;margin-top:50px'>Welcome,$name</p>";
      
    
    ?>
    <div class='a2'>
</div>
<div class='a3'>
    <p style='color:white;margin-top:50px;margin-left:20px'>View for ongoing loans<br> <a href='accountsectionongoing.php'><input type='button' value='Click Here' style='background-color:green;color:white'></a></p>
    <p style='color:white;margin-top:30px;margin-left:20px'>View for loans whose payment is done <a href='accountsectiondone.php'><input type='button' value='Click Here' style='background-color:green;color:white'></a></p>
</div>

    
</body>
</html>