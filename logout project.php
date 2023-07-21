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
     session_destroy();
     echo"<script>
     window.location='sign in.php';
     </script>";
    
    ?>
    
</body>
</html>