
<?php
include('./DB.php');
session_start();
$alphabat = '/^[a-zA-Z ]{3,}$/'; //aphabat min 3 to infinit
$Emailpattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';

if (isset($_POST['btnsendmessage'])) {
    if (isset($_POST['g-recaptcha-response'])) {
        $secreatkey = "6LescdAcAAAAAC8NXPm26xX74xEybekD79xDbqgH";
        $ip = $_SERVER["REMOTE_ADDR"];
        $response = $_POST['g-recaptcha-response'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secreatkey&response=$response&remoteip=$ip";
        $fire = file_get_contents($url);
        $data = json_decode($fire);
        if ($data->success == true) {
            if (isset($_POST['token_contact'])) {

                $token_age = time() - $_SESSION['token_time'];
                if ($token_age <= 300) {
                    if (
                        isset($_SESSION['token']) &&
                        $_POST['token_contact'] == $_SESSION['token']
                    ) {
                        $to = "info@ali-brothers.com";
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $subject = $_POST["subject"];
                        $subject2 = "Thank You For Contacting Ali-Brothers";
                        $message = $_POST["message"];
                        $message2 = "We Have Recivied Your Message and will be Contacting you as soon as possible";
                        $headers = "From:" . $email;
                        $headers2 = "From:" . $to;
                        $present = new DateTime('now');
                        $result = $present->format('Y-m-d H:i:s');

                        $Emailvalid = preg_match($Emailpattern, $email);

                        if ($Emailvalid == "1") {
                            mail($to, $subject, $message, $headers);
                            mail(' '.$email, $subject2, $message2, $headers2); // sends a copy of the message to the sender
                            // You can also use header('Location: thank_you.php?sendername=$name'); to redirect to another page.
                            //success

                            $sql = sprintf(
                                "INSERT INTO `t_contact_us`(`name`, `email`, `subject`, `message`, `Created_At`, `Modified_At`) VALUES ('%s','%s','%s','%s','%s','%s')",
                                mysqli_real_escape_string($con, $name),
                                mysqli_real_escape_string($con, $email),
                                mysqli_real_escape_string($con, $subject),
                                mysqli_real_escape_string($con, $message),
                                mysqli_real_escape_string($con, $result),
                                mysqli_real_escape_string($con, $result)
                            );

                            mysqli_query($con, $sql);
                            header("location: contact.php");
                        } else {
                            echo "email not validated. <a href='contact.php'>Go Back</a>";
                        }
                    } else {
                        echo "Token Not Matched. <a href='contact.php'>Go Back</a>";
                    }
                } else {
                    echo "Token Expiered. <a href='contact.php'>Go Back</a>";
                }
            }
        } else {
            echo "there something wrong with rechapch. <a href='contact.php'>Go Back</a>";
        }
    } else {
        echo "there something wrong with rechapch . <a href='contact.php'>Go Back</a>";
    }
}

?>
