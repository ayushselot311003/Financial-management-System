<?php
include('navuser.php');

if (isset($_REQUEST['a']))
{}else{
    echo"<script>alert('please select any payment option'),window.location='payemi.php'</script>";;
}

$date=date("m.d.y");

$s=mysqli_query($con,"select * from loan where Mobile='$user' and status='ongoing'");

$s2=mysqli_fetch_array($s);

$loanid=$s2["id"];
$emileft=$s2["emileft"];
$duration=$s2["duration"];
$emi=$s2["emi"];

$eminumber=($duration-$emileft)+1;

$newemileft=$emileft-1;

$p1=mysqli_query($con,"insert into emi values(NULL,'$name','$user','$loanid','$emi','$duration','$eminumber','$date')");

$p2=mysqli_query($con,"update loan set emileft='$newemileft' where id='$loanid'");


if ($newemileft=='0'){
    $p2=mysqli_query($con,"update loan set status='done' where id='$loanid'");


}
echo"<script>alert('you have successfully paid your emi'),window.location='viewemi.php'</script>";
?>