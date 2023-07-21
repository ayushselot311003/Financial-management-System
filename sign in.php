<html>
<head>
<?php
    include('nav.php');
    
    ?>

<style>
    body{
background-image:url('financial.jpg');
background-size:100% 100%;
background-repeat:no-repeat;
}
.x{
width:400px;
height:350px;
background-color:black;
opacity:0.4;
position:absolute;
top:200px;
left:400px;


}
.y{
width:400px;
height:350px;

position:absolute;
top:200px;
left:400px;


}
.t4{

border:none;
border-bottom-style:solid;
border-bottom-color:red;
border-bottom-size:5px;
color:white;
}
.t4:hover
{

border-bottom-style:solid;
border-bottom-color:green;

}
.t{
padding-top:100px;
padding-left:100px;
}
.t5{
    
border:none;
border-bottom-style:solid;
border-bottom-color:red;
border-bottom-size:5px;
color:white;

}
.t5:hover
{
border-bottom-style:solid;
border-bottom-color:green;

}
.t1{

padding-left:100px;
}
.t6{

}
.t6:hover
{
    
    text-decoration:underline;
    text-decoration-color:green;
    text-decoration-thickness:3px;
}
::placeholder{
color:white;
opacity:1;
}
.t2{

padding-left:100px;

}
.t7{
align:center;
color:white;
background-color:green;
width:200px;
margin-left:0px;
margin-top:10px; 
box-shadow:2px 2px 2px 2px black;
}
.t8{
padding-left:100px;
margin-top:0px;
}
.b1{
    text-decoration: none;
}
    </style>
</head>
<body>
  
   
<div class='x'>
</div>
<div class='y' align="center">
    <p class="t6" style="float:left;width:49%;border-bottom:2px solid green"><a href="sign in.php" class="b1"><font color="white">SIGN IN</font></a></p>

    <p class="t6" style="float:left;width:49%;border-bottom:2px solid #00000000"><a href="sign up.php" class="b1"><font color="white">SIGN UP</font></a></p>
<form action='sign in2.php'>
    <input type="textbox" placeholder="Mobile number" class='t4' style="margin-top:50px;background:transparent;color:white" name='t1'><br><br>
<input type="textbox"  placeholder="Password" class='t5' name='t2' style="color:white;background:transparent"></span><br><br>
<input type='checkbox'  style="margin-top:30px"><font color='white' style="margin-top:30px;margin-right:50px">I agree with terms and conditions.</font></span>
<input type="submit" value="login" class='t7'  style="margin-top:30px">
</form>
</div>

</body>
</html>
