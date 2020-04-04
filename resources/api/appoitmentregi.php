<?php
session_start();
include_once("../config/database.php");
include_once("../../tool.php");
$email = $password = $contact = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = isset($_POST['patient']) ? $_POST['patient'] : '';
    $doctor_id = isset($_POST['patient']) ? $_POST['patient'] : '';
    $from = isset($_POST['datetime1']) ? $_POST['datetime1'] : '';
    $to  = isset($_POST['datetime2']) ? $_POST['datetime2'] : '';
    $discription  = isset($_POST['discription']) ? $_POST['discription'] : '';


    $query = "INSERT INTO `appointment`(`patient_id`, `doctor_id`, `fromDate`, `toDate`, `discription`) VALUES
    (" . $patient_id . "," . $doctor_id . ",'" . $from . "','" . $to . "','" . $discription . "')";
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