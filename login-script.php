<?php

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo ("we have a post!");
    $PNR = $_REQUEST['PNR'];
    $lastName = $_REQUEST['lastname'];
    if (validate($PNR, $lastName)) {
        echo "Validation Success";
        $error = "";
        $success = "Logging In...";
        $url = "http://localhost:8000/Sensor-data-test/track.php?pnr=" . $PNR . "";
        redirect($url);

    } else {
        $error = "Incorrect Information Provided";
        $success = "";
        echo "Error in validation";
    }
}

function redirect($url)
{
    header('Location: ' . $url);
    die();
}

function validate($PNR, $lastName)
{
    $servername = "localhost";
    $dbname = "sensor";
    $username = "shanks";
    $password = "123qweasdzxc";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `Passenger_Information` WHERE `PNR` LIKE '" . $PNR . "' AND `Last_Name` LIKE '" . $lastName . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}
?>