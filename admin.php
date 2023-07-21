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
    $q1="select * from customer";
    $rl1=mysqli_query($con,$q1);
    echo"<table style='border:2px solid white'>
    <tr><td style='color:white;border:2px solid white'>Name</td>
    <td style='color:white; border:2px solid white'>Mobile</td>
    <td style='color:white;border:2px solid white'>Email</td>
    <td style='color:white;border:2px solid white'>Address</td>
    <td style='color:white;border:2px solid white'>Occupation</td>
    <td style='color:white;border:2px solid white'>BankName</td>
    <td style='color:white;border:2px solid white'>Accountno</td>
    <td style='color:white;border:2px solid white'>IFSC</td>
    <td style='color:white;border:2px solid white'>city</td>
    <td style='color:white;border:2px solid white'>DOB</td>
    <td style='color:white;border:2px solid white'>income</td>
    <td style='color:white;border:2px solid white'>state</td>
    
    </tr>
    ";
    while($row=mysqli_fetch_array($rl1))
    {
        echo"<tr><td style='color:white;border:2px solid white'>$row[Name]</td><td style='color:white;border:2px solid white'>$row[Mobile]</td><td style='color:white;border:2px solid white'>$row[Email]</td><td style='color:white;border:2px solid white'>$row[Address]</td><td style='color:white;border:2px solid white'>$row[Occupation]</td><td style='color:white;border:2px solid white'>$row[Bankname]</td><td style='color:white;border:2px solid white'>$row[Accountno]</td><td style='color:white;border:2px solid white'>$row[IFSC]</td><td style='color:white;border:2px solid white'>$row[city]</td><td style='color:white;border:2px solid white'>$row[DOB]</td><td style='color:white;border:2px solid white'>$row[income]</td><td style='color:white;border:2px solid white'>$row[state]</td></tr>";
    }
    echo"</table>";
    
    ?>
   
</body>
</html>