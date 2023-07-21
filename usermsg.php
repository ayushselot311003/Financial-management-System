<?php

include('navuser.php');


$msg=$_REQUEST["a"];


$dd=mysqli_query($con,"insert into msg values(NULL,'$user','7898145189','$msg','1');");

echo"<script>window.location='usermessage.php'</script>";
?>