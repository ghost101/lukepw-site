<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "lukepw@live.co.uk";   // <-- CHANGE THIS to lukepw@live.co.uk
    $subject = "New Contact Form Message";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email";

   if (mail($to, $subject, $body, $headers)) {
    header("Location: thankyou.php");
    exit;
    } else {
        echo "Sorry, there was a problem sending your message.";
    }

}
?>
