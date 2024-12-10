<?php

function showTable($tname,$connect){
try {
   $sql = "SELECT * FROM $tname";
    
      
  $result = mysqli_query($connect, $sql);
 
    
        if (mysqli_num_rows($result) > 0) {
       
            echo "<table border='1' >";
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
           
                echo "<table border='1' >";
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
   
    // showTable1("teachers",$connect,["name","subject"]);
    // echo "<br>";
    // showTable1("students",$connect,["name","age"]);

    function searchName($name,$connect){
        try {
           $sql = "SELECT * FROM student where name like '%$name%'";
            
              
          $result = mysqli_query($connect, $sql);
         
            
                if (mysqli_num_rows($result) > 0) {
               
                    echo "<table border='1' >";
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

    function getName($connect){
        try {
           $sql = "SELECT * FROM student ";
            
              
          $result = mysqli_query($connect, $sql);
         
            
                if (mysqli_num_rows($result) > 0) {
               
                    echo "<table border='1' >";
                    echo "<tr>";
                    
                    $columns = mysqli_fetch_fields($result);
                    foreach ($columns as $column) {
                       
            
                        echo "<th>$column->name</th>";
                    }
                    echo "<td>View students details</td>";
                    echo "</tr>";
            
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                            
                        }
                        $id=$row['id'];

                        echo "<td><a href='stdDetails.php?id=$id'>View</a></td>";
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
   

    function getDetails($id,$connect){
        try {
            $sql = "SELECT * FROM student WHERE id=$id ";
            
              
          $result = mysqli_query($connect, $sql);
         
            
                if (mysqli_num_rows($result) > 0) {
               
                    echo "<table border='1' >";
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


    function joinTable($id,$connect){
        try {
            $sql = "SELECT * FROM student,teacher
            JOIN student,teacher
            WHERE student.course=teacher.course";
            
              
          $result = mysqli_query($connect, $sql);
         
            
                if (mysqli_num_rows($result) > 0) {
               
                    echo "<table border='1' >";
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

?>