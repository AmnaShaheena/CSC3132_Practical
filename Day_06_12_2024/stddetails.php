<!DOCTYPE html>
<html>
<head>
    <title>printTable</title>
</head>
<body>
   
<?php

 
require_once '../conf/dbconf.php'; 
require_once '../myfunctions/func.php';


 
 $regno = $_GET['regno'];

stdDetails($regno,$connect);


?>


</body>
</html>