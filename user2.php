<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>
    <?php 
    Session_Start();
    $a=$_SESSION['k1'];
    $b=$_POST['k2'];
    $c=$_POST['k3'];
    $i=0.072;
    $x=$b+($i*$c*$b);
    $y=$c*12;
    $e=$x/$y;
    $con=mysqli_connect('localhost','root','','finance2');
    $q="select * from customer where Mobile='$a'";
    $rl=mysqli_query($con,$q);
    $row=mysqli_fetch_array($rl);
    $s=$row['income'];
    $m=$s/12;
    $h=$m/2;
    $q2="select * from loan where Mobile='$a' and status='ongoing'";
    $rl2=mysqli_query($con,$q2);
    $count=mysqli_num_rows($rl2);
    if($count==0)
    {

    if($b<100000)
    {
        if($c<=1)
        {
            if($h>$e)
            {
                echo"<font color=white>Loan granted</font><br><a href='apply.php?t1=$a && t2=$b && t3=$c && t4=$i && t5=$e '><br><input type='submit'  value='Click here to proceed' style='background-color:green;color:white'></a>";
            }
            else{
                echo"<font color=white>Loan can't be granted</font>";
            }

        }
        else{
            echo"<font color=white>Loan can't be granted</font>";

        }
    }
    elseif($b>=100000 and $b<300000)
    {
        if($c<=2)
        {
    if($h>$e)
    {
        echo"<font color=white>Loan granted<a href='apply.php?t1=$a && t2=$b && t3=$c && t4=$i && t5=$e '><br><input type='submit'value='Click here to proceed' style='background-color:green;color:white'></input></a></font>";
    }
    else{
        echo"<font color=white>Loan can't be granted</font>";
    }
}
else{
    echo"<font color=white>Loan can't be granted</font>";

}
}
elseif($b>=300000 and $b<500000)
{
    if($c<=3)
    {
if($h>$e)
{
    echo"<font color=white>Loan granted<a href='apply.php?t1=$a && t2=$b && t3=$c&& t4=$i && t5=$e'><br><input type='submit'value='Click here to proceed' style='background-color:green;color:white'></input></a></font>";
}
else{
    echo"<font color=white>Loan can't be granted</font>";
}
}
else{
echo"<font color=white>Loan can't be granted</font>";

}
}
elseif($b>=500000 and $b<1000000)
{
    if($c<=5)
    {
if($h>$e)
{
    echo"<font color=white>Loan granted<a href='apply.php?t1=$a && t2=$b && t3=$c && t4=$i && t5=$e'><br><input type='submit'value='Click here to proceed' style='background-color:green;color:white'></input></a></font>";
}
else{
    echo"<font color=white>Loan can't be granted</font>";
}
}
else{
echo"<font color=white>Loan can't be granted</font>";

}
}
elseif($b>=1000000 and $b<=5000000)
{
    if($c<=10)
    {
if($h>$e)
{
    echo"<font color=white>Loan granted<a href='apply.php?t1=$a && t2=$b && t3=$c && t4=$i && t5=$e'><br><input type='submit'value='Click here to proceed' style='background-color:green;color:white'></input></a></font>";
}
else{
    echo"<font color=white>Loan can't be granted</font>";
}
}
else{
echo"<font color=white>Loan can't be granted</font>";

}
}
else{
    echo"<font color=white>Loan can't be granted</font>";


}
    }
    else
    {
        echo"<font color=white>You already have a uncleared loan</font>";
    
    }
    
    ?>
    
</body>
</html>