<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'admin@Betamatrix.com';
    $headers = "From: $name <$email>";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
