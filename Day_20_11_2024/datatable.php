<?php
require_once 'dbconf.php';

try {
    $sql = "SELECT * FROM student";

    // Execute the query
    $result = mysqli_query($connect, $sql);

    // Check if data exists in the table
    if (mysqli_num_rows($result) > 0) {
        // Start the table
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        
        // Fetch the column names to use as table headers
        echo "<tr>";
        $columns = mysqli_fetch_fields($result);
        foreach ($columns as $column) {
            echo "<th>" . $column->name . "</th>";
        }
        echo "</tr>";

        // Fetch the data from rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }

        // End the table
        echo "</table>";
    } else {
        echo "No result";
    }
} catch (Exception $e) {
    die($e->getMessage());
}
?>