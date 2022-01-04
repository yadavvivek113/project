<?php

$link = mysqli_connect("localhost", "root", "", "phpsamples");

 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM products";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table >";
            echo "<tr>";
                echo "<th>  product id  </th>";
                echo "<th>  product name  </th>";
                echo "<th>  product price  </th>";
                echo "<th>  product quantity  </th>";
                echo "<th>  Total Price  </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['pname'] . "</td>";
                echo "<td>" . $row['pprice'] . "</td>";
                echo "<td>" . $row['pqty'] . "</td>";
                echo "<td>" . ($row['pqty']*$row['pprice'])."</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 

mysqli_close($link);
?>
