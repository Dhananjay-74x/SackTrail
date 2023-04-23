<?php

$PNR = $_REQUEST['pnr'];

$servername = "localhost";
$dbname = "sensor";
$username = "shanks";
$password = "123qweasdzxc";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `UID`, `Counter` FROM `RFID` WHERE `PNR` LIKE '" . $PNR . "'";

$result = $conn->query($sql);
$row[] = array();

$counters = array();

while ($row = mysqli_fetch_assoc($result)) {
    array_push($counters, $row['Counter']);
}

$no_rows = count($counters);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track your Baggage</title>
    <script src="https://kit.fontawesome.com/8c58a8075a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="track.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        Baggage Status.
    </div>

    <div class="progress-container">
        <div class="progress-decoration">
            <div class="filler"></div>
            <img class="check1" src="imgs/security-check.png" alt="">
            <img class="check2" src="imgs/loading.png" alt="">
            <img class="check3" src="imgs/luggage-carousel.png" alt="">
            <!-- Contains 3 svg icons of checkpoints-->
        </div>

        <div class="progress-bar-container">

            <div class="process-space">
                <img class="warning" src="imgs/alert.png" alt="">
                <div class="progress-bar">
                    <div class="js-completed-bar completed-bar" data-complete="0">
                        <hr class="completed-bar__dashed">
                        <i class="fa fa-suitcase completed-bar__bag"></i>
                    </div>
                </div>
            </div>

            <div class="process-space" id="bar2">
                <img class="warning" src="imgs/alert.png" alt="">
                <div class="progress-bar">
                    <div class="js-completed-bar completed-bar-2" data-complete="0">
                        <hr class="completed-bar__dashed">
                        <i class="fa fa-suitcase completed-bar__bag"></i>
                    </div>
                </div>
            </div>


            <div class="process-space" id="bar3">
                <img class="warning" src="imgs/alert.png" alt="">
                <div class="progress-bar">
                    <div class="js-completed-bar completed-bar-3" data-complete="0">
                        <hr class="completed-bar__dashed">
                        <i class="fa fa-suitcase completed-bar__bag"></i>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="footer">
        SackTrail 2023 ©
    </div>
</body>
<script>

    window.addEventListener("load", (event) => {
        bar2 = document.querySelector("#bar2");
        bar3 = document.querySelector("#bar3");

        var noRows = <?php echo $no_rows ?>;
        console.log(noRows);
        if (noRows == 1) {
            bar2.style.display = 'none';
            bar3.style.display = 'none';
        }
        else if (noRows == 2) {
            bar3.style.display = 'none';
        }

        var passedArray = <?php echo json_encode($counters); ?>;

        var actualProgress = passedArray.map(func1);
        console.log(actualProgress);

        var progress = document.querySelector(".completed-bar");
        if (progress) {
            console.log(actualProgress[0]);
            progress.dataset.complete = actualProgress[0];
            progress.style.width = progress.getAttribute("data-complete") + "%";
            progress.style.opacity = 1;
        }

        var progress2 = document.querySelector(".completed-bar-2");
        if (progress2) {
            console.log(actualProgress[1]);
            progress2.dataset.complete = actualProgress[1];
            progress2.style.width = progress2.getAttribute("data-complete") + "%";
            progress2.style.opacity = 1;
        }

        var progress3 = document.querySelector(".completed-bar-3");
        if (progress3) {
            console.log(actualProgress[2]);
            progress3.dataset.complete = actualProgress[2];
            progress3.style.width = progress3.getAttribute("data-complete") + "%";
            progress3.style.opacity = 1;
        }
    })



    function func1(num) {
        if (num == 0) {
            return 15;
        }
        else if (num == 1) {
            return 45;
        }
        else if (num == 2) {
            return 80;
        }
        return 100;
    }

</script>

</html>