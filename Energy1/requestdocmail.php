<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['email'])) {
       echo $to = $_POST['email'];
        $subject = "Welcome";
        $message = "Welcome to our website!";
        $headers = 'From: your_email@example.com' . "\r\n" .
            'Reply-To: your_email@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (isset($to) && isset($subject) && isset($message) && isset($headers)) {
            if (mail($to, $subject, $message, $headers)) {
                // Email sent successfully
                echo "Email sent successfully.";
            } else {
                // Email sending failed
                echo "Email sending failed.";
            }
        } else {
            // Handle missing or null values
            echo "Invalid email parameters.";
        }
    } else {
        // Handle missing POST data
        echo "Missing email data.";
    }
}
?>
