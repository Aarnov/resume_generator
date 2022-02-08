<?php
require_once "config_demo.php";

//Define variables and initialize with empty values
$first_name = $last_name = $email = "";
$first_name_err = $last_name_err = $email_err = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Validate first name
    $input_first_name = trim($_POST["first_name"]);
    if (empty($input_first_name)) {
        $first_name_err = "Please enter a first name";
        echo "Please enter a first name.";
    } elseif (!filter_var($input_first_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))){
        $first_name_err = "Please enter a valid first name";
        echo "Please enter a valid first name";
    }else{
        $first_name = $input_first_name;
    }

    //Validate last name
    $input_last_name = trim($_POST["last_name"]);
    if (empty($input_last_name)) {
        $last_name_err = "Please enter a last name";
        echo "Please enter a last name.";
    } elseif (!filter_var($input_last_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))){
        $last_name_err = "Please enter a valid last name";
        echo "Please enter a valid last name";

    }else{
        $last_name = $input_last_name;
    }
    //Validation of email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter a email";
        echo "Please enter a email";
    }
    else{
        $email = $input_email;
    }


    if(empty($first_name_err) && empty($last_name_err)&& empty($email_err)){
// Prepare an insert statement
        $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);

            // Set parameters
            $first_name = trim($_POST['first_name']);
            $last_name = trim($_POST['last_name']);
            $email = trim($_POST['email']);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                header("location: retrieve_to.php");
            } else {
                echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
            }
        } else {
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
        }

// Close statement
        mysqli_stmt_close($stmt);

// Close connection
        mysqli_close($conn);
    }
}
?>


    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form</title>
    </head>
    <body>
    <a href="retrieve_to.php">List</a>
    <form action="create.php" method="post">
        First name: <input type="text" placeholder="Enter First name here" name="first_name"> <br>
        Last Name: <input type="text" placeholder="Enter Last name here" name="last_name"> <br>
        Email: <input type="email" placeholder="Enter email here" name="email"> <br>
        <input type="submit" value="Submit">
    </form>

    </body>
    </html><?php
