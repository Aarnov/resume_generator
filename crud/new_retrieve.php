<?php
require_once "config_demo.php";
$sql = "SELECT * FROM persons";
$result = mysqli_query($conn, $sql)

?>

<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<div class="container-fluid vh=100">
    <div class="row justify-content-center ">
                <a href="create.php">Create New</a>
                <form action="search.php" method="post">
                    <input type="text" name="search_keyword" required>
                    <select name="search_field" required>
                        <option value="first_name" selected>First Name</option>
                        <option value="last_name">Last Name</option>
                        <option value="email">Email</option>
                    </select>
                    <input type="submit" value="Search">
                </form>


        <table class='table table-dark' border="1">
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><img src="upload/<?php echo $row['image'] ?>" height="2%" width="5%"></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><a href="update.php?id=<?php echo $row["id"] ?>">Edit</a></td>
                    <td><a href="delete_details.php? id=<?php echo $row["id"] ?>">Delete</a></td>
                </tr>

            <?php } ?>
        </table>
    </div>
</div>
</body>
</html>



