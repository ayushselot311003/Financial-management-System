<?php
include("navadmin.php");
?>

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
            margin-top:100px;

           

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
$z=array();

$rf=mysqli_query($con,"select  id,sender from msg where receiver='$user' order by id desc");
while($rf2=mysqli_fetch_array($rf)){

 $sender=$rf2["sender"];
 $z[]=$rf2["sender"];
//echo "=$rf2[id]=";

$ff=mysqli_query($con,"select * from customer where Mobile='$sender'");


$ff2=mysqli_fetch_array($ff);
//$z[]=$ff2["Name"];
//echo"<br>";
   //echo"<div style='background-color:yellow;height:100px;width:300px;'> <a href='adminmsg2.php?t1=$sender'>print_r(array_unique($z))</a> </div>";
    /*echo"<div class='a2'>
    </div>
    <div class='a3'>
    <div><a href='adminmsg2.php?t1=$sender'>$n</a><br></div>

    </div><br>";*/


}
$i=0;
$j=0;
for($i=0;$i<sizeof($z);$i++)
{
    $c=0;
    $sender=$z[$i];
    for($j=$i-1;$j>=0;$j--)
    {
        if($z[$i]==$z[$j])
        {
            $c=$c+1;
        }
    }
        if($c==0)
        {
            $ff=mysqli_query($con,"select * from customer where Mobile='$sender'");


$ff2=mysqli_fetch_array($ff);

            echo"<div style='background-color:yellow;height:100px;width:300px;text-align:center;margin-left:500px;'> <a href='adminmsg2.php?t1=$sender' style='text-decoration:none'>$ff2[Name]</a> </div>";
             
        }
    
}



//var_dump($z);

?>
    
</body>
</html>