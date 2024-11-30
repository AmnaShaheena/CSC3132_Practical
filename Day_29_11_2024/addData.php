
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
 <form action="addData.php" method="POST">
    <table>
        <tr>
           
            <td align="right">Registration Number</td>
            <td><input type="text" name="regno" /></td>
        </tr>
        <tr>
         
            <td align="right">Name</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            
            <td align="right">Age</td>
            <td><input type="number" name="age" /></td>
        </tr>
        <tr>
            <td align="right">course</td>
            <td>
            <select name="course" >
                <option >CSC</option>
                <option >AMC</option>
                <option >ICT</option>
            </select>
            </td>
        </tr>
        <tr>
            <td></td>
        <td ><input type="submit" value="Add a new student"></td>
        </tr>
    </table>
 </form>

<?php
    require_once  'dbconf.php';

   
    
    //insert data into table
    function addData($connect, $regno,$name,$age,$course){
        try{
            //query
            $sql="INSERT INTO student VALUE ('$regno','$name',$age,'$course')";
            //execute the query
            $result=mysqli_query($connect,$sql);
            if($result){
                echo "<br>";
                echo "New student record created succeccfully";
            }else{
                die("Error ".mysqli_error($connect));
            }
        } catch (Exception $e){
            die($e->getMessage());
        } 

    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //echo "Got the POST request from the client";
        $regno=$_POST['regno'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $course=$_POST['course'];
        addData($connect, $regno,$name,$age,$course);
     } 
     
?>

</body>
</html>

    
    