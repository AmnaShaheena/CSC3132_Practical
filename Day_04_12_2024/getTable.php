<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once '../conf/dbconf.php';
require_once '../myfunctions/func.php';
echo $_SERVER['PHP_SELF'];//get the file name

// showTable("students",$connect);
// echo "<br>";
// showTable1("teachers",$connect,["name","subject"]);
searchStud('name',$connect);
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <table>
        <tr>
            <td><strong>Student Name :</strong> </td>
            <td><input type="text" placeholder="search"></td>
        </tr>
        <tr>
            <td></td>
        <td ><input type="submit" value="search"></td>
        </tr>
    </table>
</form>
 <?php

 if(isset($_GET['name']) && $_GET['name' != '']){
    searchStud($_GET['name'],$connect);
 }
 ?>


</body>
</html>