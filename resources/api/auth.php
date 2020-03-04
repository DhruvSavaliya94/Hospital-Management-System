<?php
session_start();
include_once("../config/database.php");
include_once("../../tool.php");
$email = $password = $contact = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_email = isset($_POST['userid']) ? $_POST['userid'] : '';
    $_password = isset($_POST['password']) ? $_POST['password'] : '';
    $query = "SELECT * FROM `user` WHERE email='" . $_email . "' AND password='" . $_password . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["userid"] = $row["email"];
        }
    }
    if (isset($_SESSION["userid"])) {
        echo '<script type="text/JavaScript">  
          alert("Login Successfully."); 
          </script>';
        header('Location: ' . "http://localhost/Hospital-Mangement-System/dashboard.php");
    } else {
        header('Location: ' . "http://localhost/Hospital-Mangement-System/Login.php");
    }
} else {
    header('Location: ' . "http://localhost/Hospital-Mangement-System/Login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>