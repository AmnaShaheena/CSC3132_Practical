<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Details</title>
</head>
<body>
    
    <?php
    require_once 'conf/dbconf.php';
    require_once 'myfunctions/func.php';
    $regno=$_GET['regno'];
    getDetails($regno,$connect);
    //echo "<h4>My name is ...</h4>";
    ?>
    
</body>
</html>