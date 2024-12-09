<?php

function showTable($tname,$connect){
try {
   $sql = "SELECT * FROM $tname";
    
      
  $result = mysqli_query($connect, $sql);
 
    
        if (mysqli_num_rows($result) > 0) {
       
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr>";
            
            $columns = mysqli_fetch_fields($result);
            foreach ($columns as $column) {
               
    
                echo "<th>$column->name</th>";
            }
            echo "</tr>";
    
            
            while ($row = mysqli_fetch_assoc($result)) {
                
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }      
            echo "</table>";
        } else {
            echo "No result";
        }
      
}
catch (Exception $e) {
    die($e->getMessage());
}
}


function showTable1($tname,$connect,$colnames){
    try {
       $sql = "SELECT ";
        for($i=0; $i<sizeof($colnames)-1; $i++){
            $sql.=$colnames[$i].",";
        }
      $sql.=$colnames[sizeof($colnames)-1]." FROM $tname "; 

      $result = mysqli_query($connect, $sql);
     
        
            if (mysqli_num_rows($result) > 0) {
           
                echo "<table border='1' cellpadding='5' cellspacing='0'>";
                echo "<tr>";
                
                $columns = mysqli_fetch_fields($result);
                foreach ($columns as $column) {
                   
        
                    echo "<th>$column->name</th>";
                }
                echo "</tr>";
        
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }      
                echo "</table>";
            } else {
                echo "No result";
            }
          
    }
    catch (Exception $e) {
        die($e->getMessage());
    }
    }
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
    ?>