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

include('navadmin.php');


$s1=$_REQUEST["t1"];
//echo"$s1";
?>

<form action='adminmsg3.php'>
<input type='text' name='a' placeholder='Type your message here' style='margin-top:120px;margin-left:500px;background-color:pink'>
<input type='hidden' value='<?php echo$s1?>' name='b'>
<input type='submit' style='background-color:green;color:white'>
</form>

<?php

$rf=mysqli_query($con,"select * from msg where sender='$s1' and receiver='7898145189' or sender='7898145189' and receiver='$s1' order by id desc");
while($rf2=mysqli_fetch_array($rf)){
$sender=$rf2['sender'];    
$msg=$rf2['msg'];


if($sender==$user){

    //echo"<div style='background-color:yellow;height:30px;width:300px;'> $msg </div>";
    echo"<div style='background:yellow;height:30px;width:300px; border-radius:360px;padding-left:10px;float:left;margin-top:10px'> $msg </div><br><br>";
}
else{
    //echo"<div style='background:red;height:30px;width:300px;'> $msg </div>";
    echo"<div style='background:red;height:30px;width:300px;float:right;text-align:right;margin-top:10px;border-radius:360px;padding-right:10px'> $msg </div><br><br>";


}

}



?>
    
</body>
</html>