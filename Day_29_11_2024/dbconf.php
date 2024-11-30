<?php
define('SERVERNAME','127.0.0.1:3306');
define('USERNAME','root');
define('PASSWORD','mariadb');
define('DNAME','school');

try{

$connect=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DNAME);
    if(!$connect){
        die("connection failed".mysqli_connect_error());
    }
    else{
        echo "connectection successfully";
    }
}
catch (Exception $e){
    die($e->getMessage());
}
?>