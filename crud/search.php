<?php
require_once "config_demo.php";
if (isset($_POST["search_keyword"]) && isset($_POST["search_keyword"])){
    $search_keyword=$_POST["search_keyword"];

    $search_field=$_POST["search_field"];


    if($search_field=="first_name"){
        $sql="SELECT * FROM persons WHERE first_name LIKE '%".$search_keyword."%'";
        $result = mysqli_query($conn, $sql);
    }
    elseif($search_field=="last_name"){
        $sql="SELECT * FROM persons WHERE last_name LIKE '%".$search_keyword."%'";
        $result = mysqli_query($conn, $sql);
    }
    elseif($search_field=="email"){
        $sql="SELECT * FROM persons WHERE email LIKE '%".$search_keyword."%'";
        $result = mysqli_query($conn, $sql);
    }
}
?>
<html>
<body>
<a href="create.php" method="post">Create</a>
<form action="search.php" method="post">
    <input type="text" name="search_keyword" required>
    <select name="search_field" required>
        <option value="first_name"selected>First Name</option>
        <option value="last_name">Last Name</option>
        <option value="email">Email</option>
    </select>
    <input type="submit" value="search">
</form>
<?php
if(isset($result)) {
    if (mysqli_num_rows($result) == 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td colspan='7'>No data found!!!</td>";
        echo "</tr>";
        echo "</table>";
    }else{
       echo" <table border=1>";

    echo"<tr>";
        echo"<th>id</th>";
        echo"<th>Image</th>";
        echo" <th>First Name</th>";
        echo"<th>Last Name</th>";
        echo"<th>Email</th>";
        echo"<th>Edit</th>";
        echo"<th>Delete</th>";
    echo"</tr>";
}
?>



    <?php foreach($result as $row){?>
        <tr>
            <td><?php echo$row['id']?></td>
            <td><img src="upload/<?php echo $row['image']?>" height="2%" width="5%"></td>
            <td><?php echo$row['first_name']?></td>
            <td><?php echo$row['last_name']?></td>
            <td><?php echo $row['email']?></td>
            <td><a href="update_details.php?id=<?php echo $row['id']?>">Edit</td>
            <td><a href="delete_detail.php?id=<?php echo $row['id']?>">Delete</td>
        </tr>
        <?php
        }
        ?>
    <?php }?>
</table>
</body>
</html>

