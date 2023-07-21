<?php

include('navadmin.php');


$msg=$_REQUEST["a"];
$s=$_REQUEST["b"];

echo"$msg $s";
$dd=mysqli_query($con,"insert into msg values('NULL','7898145189','$s','$msg','1');");

echo"<script>window.location='adminmsg2.php?t1=$s'</script>";
?>