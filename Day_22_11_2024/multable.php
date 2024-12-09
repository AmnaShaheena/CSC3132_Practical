<?php
require_once '../conf/dbconf.php';
require_once '../myfunctions/func.php';



showTable("student",$connect);
echo "<br>";
showTable("teacher",$connect);



    echo "<br>";
    showTable1("teacher",$connect,["name","subject"]);
?>