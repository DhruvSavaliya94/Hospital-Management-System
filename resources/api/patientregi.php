<?php
session_start();
include_once("../config/database.php");
include_once("../../tool.php");
$email = $password = $contact = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_firstname = isset($_POST['ptfname']) ? $_POST['ptfname'] : '';
    $_lastname = isset($_POST['ptlname']) ? $_POST['ptlname'] : '';
    $_contact = isset($_POST['ptmobile']) ? $_POST['ptmobile'] : '';
    $_blood_grp  = isset($_POST['bloodgroup']) ? $_POST['bloodgroup'] : '';
    $_disease  = isset($_POST['disease']) ? $_POST['disease'] : '';
    $_gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $_dob = isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : '';
    $_address = isset($_POST['address']) ? $_POST['address'] : '';


    $query = "INSERT INTO `patient`(`fname`, `lname`, `contact`, `bloodgp`, `disease`, `gender`, `dob`, `address`) VALUES
    ('" . $_firstname . "','" . $_lastname . "','" . $_contact . "','" . $_blood_grp . "','" . $_disease . "','" . $_gender . "','" . $_dob . "','" . $_address . "')";
    echo $query;
    if (mysqli_query($conn, $query)) {
        header('Location: ' . "http://localhost/Hospital-Mangement-System/dashboard.php");
    } else {
        if (isset($_SESSION["userid"])) {
            unset($_SESSION["userid"]);
            header('Location: ' . "http://localhost/Hospital-Mangement-System/Login.php");
        } else {
            header('Location: ' . "http://localhost/Hospital-Mangement-System/Login.php");
        }
    }
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