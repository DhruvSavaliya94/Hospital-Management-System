<?php
include_once("../config/database.php");
include_once("../../tool.php");
$email = $password = $contact = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$_firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
	$_lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
	$_email = isset($_POST['email_id']) ? $_POST['email_id'] : '';
    $_password = isset($_POST['password']) ? $_POST['password'] : '';
	$_contact = isset($_POST['contact']) ? $_POST['contact'] : '';
	
	$query = "INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `contact`) VALUES 
	('".$_firstname."','".$_lastname."','".$_email."','".$_password."',".$_contact.")";
	echo $query;
	if(mysqli_query($conn, $query)){
		header('Location: '."http://localhost/Hospital-Mangement-System/login.php");
	}
}
?>