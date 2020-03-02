<?php
include_once("../config/database.php");
include_once("../../tool.php");
$email = $password = $contact = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$_email = isset($_POST['userid']) ? $_POST['userid'] : '';
    $_password = isset($_POST['password']) ? $_POST['password'] : '';
	
	$query = "SELECT * FROM `user` WHERE email=".$_email." and password=".$_password;
    
    $result = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "Id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
        }
    } 
}
?>