<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "masabali143@gmail.com"; // Replace with the actual recipient email address
    $subject = "Coin sensei";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    $email_content = "First Name: $first_name\n" .
                     "Last Name: $last_name\n" .
                     "Email: $email\n" .
                     "Phone: $phone\n" .
                     "Message:\n$message";
    
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
