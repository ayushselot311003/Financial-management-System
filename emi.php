<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include('nav.php');
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<style>
    .x{
    color:white;
    margin-left:50px;
    }
   


    body{
background-image:url('financial.jpg');
background-size:cover;
background-repeat:no-repeat;
}
.x1{
width:400px;
height:400px;
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
width:350px;
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
<script>
    function show()
    {
        var a= document.getElementById('t1').value;
        var b =document.getElementById('t2').value;
        var c=1;
        for(var i=0;i<b;i++)
        {
            c=c*1.006;

        }
        var d=parseInt((a*0.006*c)/(c-1));
        document.getElementById('y').value=d;



    }

    </script>
<body>
    <div class='x1'></div>
    <div class='y'>
    <h1 class='x'>EMI calculator</h1>
    <input type='textbox' placeholder='Enter loan amount' class='t4' style="margin-top:50px;background:transparent;color:white;margin-left:50px" id='t1'><br>
    <input type='textbox' placeholder='Enter time for repayment of loan' class='t4' style="margin-top:50px;background:transparent;color:white;margin-left:50px" id='t2'><br><br>
    <input type='button' class='btn btn-primary' value='calculate' style='margin-left:150px' onclick='show()'>
    
    <h6 style='color:white;margin-top:20px;margin-left:10px'>Calculated at the annual rate of interest of 7.2%</h6>
    <input type='textbox'  placeholder='Calculated EMI' class='t4' style="margin-top:20px;background:transparent;color:white;margin-left:50px" id='y' style='width:200px'>
</div>
   
</body>
</html>