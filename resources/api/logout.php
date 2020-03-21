<?php
session_start();
if (isset($_SESSION["userid"])) {
    unset($_SESSION["userid"]);
    echo '<script type="text/JavaScript">  
      alert("Login Successfully."); 
      </script>';
    header('Location: ' . "http://localhost/Hospital-Mangement-System/Login.php");
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