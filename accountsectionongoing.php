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
      $q1="select * from loan where status='ongoing'";

      $rl1=mysqli_query($con,$q1);
     
      $a=0;
      $b=0;
      $c=0;
      while($row=mysqli_fetch_array($rl1))
      {
        $a=$a+$row['amount'];
        $b=$row['emi']*$row['duration']+$b;
        

      }
      $d=0;
      $e=0;
      $q2="select DISTINCT loanid FROM emi ORDER BY id DESC";
      $rl2=mysqli_query($con,$q2);


      while($rows=mysqli_fetch_array($rl2))
      {

        $loanid=$rows['loanid'];

        $j2="select * FROM emi where loanid='$loanid' order by id desc ";
        $j4=mysqli_query($con,$j2);
        $j3=mysqli_fetch_array($j4);

    
        $d=$d+($j3['emi1']*$j3['installment']);
        $e=$e+($j3['emi1']*($j3['duration']-$j3['installment']));
      }
      
      $b=$b+$a;
      $c=$b-$a;
      
     

      

      echo"<div class='a2'>
      </div>
      <div class='a3'>
      <p style='color:white;margin-top:50px;margin-left:10px'>Total distributed amount:$a</p>
      <p style='color:white;margin-top:50px;margin-left:10px'>estimated distributed return:$b</p>
      <p style='color:white;margin-top:50px;margin-left:10px'>Total collected amount:$d</p>
      <p style='color:white;margin-top:50px;margin-left:10px'>Remaining amout to be colleccted in future:$e</p>
      <p style='color:white;margin-top:50px;margin-left:10px'>Estimated profit:$c</p>

      
      </div>";
      
    
    
   
      
    
    ?>
    

    
</body>
</html>