<?php 
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'alibrothers');

// define('DB_HOST', 'localhost');
// define('DB_USERNAME', 'alibenbk_alibbyadmin');
// define('DB_PASSWORD', '7RqjTfQK32rjxNN');
// define('DB_NAME', 'alibenbk_alibbynthx');



$con=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die($con);

$alphabat = '/^[a-zA-z ]{3,}$/'; //aphabat min 3 to infinit 
$number2 = '/^[0-9]{1,2}$/'; //2 digit Number
$Cnicpattern = '/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/';
$ContactNumberpattern = '/^[0-9]{11}$/';
$Addresspattern = '/^[a-zA-Z0-9,-_ ]{1,}$/';
$Emailpattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
$Passwordpattern = '/^[a-zA-Z0-9!@#\$%\^&\(*]{8,}$/';


function log_query($message,$id,$datetime,$db){

    $query = sprintf("INSERT INTO `t_log`(`user_id`, `message`, `Created_At`) VALUES ('%s','%s','%s')",
        mysqli_real_escape_string($db,$id),
        mysqli_real_escape_string($db,$message),
        mysqli_real_escape_string($db,$datetime));

        mysqli_query($db, $query);
}

?>
