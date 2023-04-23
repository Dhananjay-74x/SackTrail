<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register-success.css">
    <title>Success</title>
</head>
<body>
    <div class="container">
        <img src="imgs/checked.png" alt="">
        <h1>Registered Successfully!</h1>
    </div>
    
</body>
</html>


<?php

// form variables
$firstName = $_REQUEST['firstname'];
$lastName = $_REQUEST['lastname'];
$pnr = $_REQUEST['pnr'];
$uid = $_REQUEST['uid'];

// connection to db variables
$servername = "localhost";
$dbname = "sensor";
$username = "shanks";
$password = "123qweasdzxc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `Passenger_Information` (`PNR`, `First_Name`, `Last_Name`) VALUES ('" . $pnr . "', '" . $firstName . "', '" . $lastName . "');";
$conn->query($sql);


$sql2 = "UPDATE `RFID` SET `Counter` = '0', `PNR` = '" . $pnr . "' WHERE `RFID`.`UID` = '" . $uid . "';";
$conn->query($sql2);

?>