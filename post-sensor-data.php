<?php

$servername = "localhost";
$dbname = "sensor";
$username = "shanks";
$password = "123qweasdzxc";

$api_key_value = "tPmAT5Ab3j7F9";

//-----------------------------------------------------------

//if post method used
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    console_log("we have a post!");
    $api_key = test_input($_REQUEST["api_key"]);

    echo $_REQUEST['api_key'];
    //if api key matches
    if($api_key == $api_key_value) {
        echo "api matches";
        $UID = test_input($_REQUEST["sentUID"]);
        $Counter = test_input($_REQUEST["sentCounter"]);

        //creating connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 
        print_r($_POST);
        if(!empty($_REQUEST["sentUID"]) && !empty($_REQUEST["sentCounter"])){
            $UID = $_REQUEST['sentUID'];
            $Counter = $_REQUEST['sentCounter'];

            console_log("we done recieved some values");
        
            $sql = "UPDATE `RFID` SET `COUNTER` = '".$Counter."' WHERE `RFID`.`UID` = '".$UID."' ;";
            if( $conn->query($sql) === TRUE) {
                console_log("Values inserted successfully");
            }
            else {
                console_log("Error in sql operation");
            }
        }

        $conn->close();
    }
    else {
        console_log("Api key didnt match!");
    }
}

//temporary test -->currently sending UID and not making checks



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags)
    {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
