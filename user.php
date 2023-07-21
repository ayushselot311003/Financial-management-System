<!DOCTYPE html>
<html lang="en">
    

    <?php
    include('navuser.php');

    
    ?>
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
    height:650px;
    background-color:black;
    opacity: 0.4;
    position:absolute;

    top:10px;
    
    left:400px;
          
}
.a3{
    width:370px;
    height:650px;
    
    position:absolute;

    top:10px;
    
    left:400px;
    box-shadow: 5px 8px 9px black;

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
         <script src="jquery-3.7.0.min.js"></script>
    <script src="jquery.validate.min.js"></script>
</head>
<script>
    $(document).ready(function(){
        $("#t").click(function(){
            var a=$("#t1").val();
            var b=$("#t2").val();
            $.post('user2.php',{k2:a,k3:b},function(data){
                $("#t3").html(data);
                
            });

        });

    });
    </script>
<body>
    <?php
    
    echo"<p style='color:white;margin-top:50px'>Welcome,$name</p>";
    ?>


    <div class="a2">
   </div>

    <div class="a3">
        <input type="text" placeholder="Enter loan amount" class="z" id="t1" name="t1">
        <input type="text" placeholder="Enter time needed for repayment of loan" class="z" id="t2" name="t2">
        <input type="button" value="Apply for loan" class="t" id="t">
        <p id="t3"></p>
    
    
        <?php
        $a=$income/12;
        $b=$a/2;
        $c=$b*12;
        $ans=round($c/1.072,2);
        echo"<p><font color='white' style='margin-top:10px'> 1)You are eligible for claiming a loan upto $ans for 1 year</font></p>";
        $a=$income/12;
        $b=$a/2;
        $c=$b*12;
        $ans=round($c*2/1.144,2);
        echo"<p><font color=white style='margin-top:10px'>2)You are eligible for claiming a loan upto $ans for 2 year</font></p>";
       
        $a=$income/12;
        $b=$a/2;
        $c=$b*12;
        $ans=round($c*3/1.216,2);
        echo"<p><font color=white>3)You are eligible for claiming a loan upto $ans for 3 year</font></p>";
       
        $a=$income/12;
        $b=$a/2;
        $c=$b*12;
        $ans=round($c*4/1.288,2);
        echo"<p><font color=white>4)You are eligible for claiming a loan upto $ans for 4 year</font></p>";
       
        $a=$income/12;
        $b=$a/2;
        $c=$b*12;
        $ans=round($c*5/1.36,2);
        echo"<p><font color=white>5)You are eligible for claiming a loan upto $ans for 5 year</font></p>";

        
        ?>
    </div>

    

    
</body>
</html>