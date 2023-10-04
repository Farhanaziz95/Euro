<?php

include("DB.php");
session_start();
$alphabat = '/^[a-zA-Z ]{3,}$/'; //aphabat min 3 to infinit
$Emailpattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';


$present = new DateTime('now');
$time_date = $present->format('Y-m-d H:i:s');

if (isset($_POST['subid']) && $_POST['subid'] == "64812") {
    $email = $_POST['emailtosub'];

    $present = new DateTime('now');
    $result = $present->format('Y-m-d H:i:s');

    $sql1 = sprintf(
        "SELECT * FROM newsletter WHERE email = '%s'",
        mysqli_real_escape_string($con, $email)
    );
    $result1 = mysqli_query($con, $sql1);


    $totalrows = mysqli_num_rows($result1);
    if ($totalrows > 0) {

        echo "exist";
    } else {
        $sql = sprintf(
            "INSERT INTO `newsletter`(`email`,`Created_At`) VALUES ('%s','%s')",
            mysqli_real_escape_string($con, $email),
            mysqli_real_escape_string($con, $result)
        );
        // mysqli_query($con, $sql);
        if (mysqli_query($con, $sql)) {
            log_query("Try to subscribe The Email=$email existed Note:Subscribed Successfull", $email, "$time_date", $con);
            echo "successfull";
        } else {
            log_query("Try to subscribe The Email=$email existed Note:Subscribtion Failed", $email, "$time_date", $con);
            echo "shitherewegoagain";
        }
    }
}

if (isset($_POST["contactid"])) {
    // echo "inside checkingid";
    if (isset($_POST['token_user'])) {
        // echo "inside token_user isset";
        $token_age = time() - $_SESSION['token_time'];
        if ($token_age <= 300) {
            // echo "inside time check";

            if (
                isset($_SESSION['token']) &&
                $_POST['token_user'] == $_SESSION['token']
            ) {
                // echo "inside match token";
                echo "Authenticated";
            } else {
                log_query("Check If The Email=$Email existed Note:Session not matched", $_SESSION['userid'], "$time_date", $con);
                echo "notmatch";
            }
        } else {
            log_query("Check If The Email=$Email existed Note:Session expired", $_SESSION['userid'], "$time_date", $con);
            echo "sessionexpire";
        }
    }
}
?>