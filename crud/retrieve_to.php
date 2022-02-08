<?php
require_once "config_demo.php";

$sql="SELECT * FROM persons";
if($result=mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result)>0){
        echo '<a href="create.php">Add new+</a>';

        echo"<table border='1'>";
        echo"<tr>";
        echo"<th>id</th>";
        echo"<th>First Name</th>";
        echo"<th>Last Name</th>";
        echo"<th>Email</th>";
        echo"<th>Edit</th>";
        echo "<th>Delete</th>";

        echo"</tr>";
        foreach ($result as $row){
            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['first_name']."</td>";
            echo"<td>".$row['last_name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo '<td><a href="update.php?id=' . $row['id']. '">Edit</a></td>';
            echo '<td><a href="delete_details.php? id=' . $row['id'] .'">Delete</a> </td>';
            echo"</tr>";

        }
        echo"</table>";
        //Free Result Set

        mysqli_free_result($result);
    }else{
        echo"ERROR:Could not able to execute $sql.".mysqli_error($conn);
    }
    mysqli_close($conn);

}
?><?php
