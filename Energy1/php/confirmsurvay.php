
<?php
// Include the PHPMailer library for sending emails
require 'vendor/autoload.php';

// Get the f.no from the POST request
$fno = $_POST['fno'];

// Database connection settings
$servername = 'localhost';
$username = 'rectubmx_simplegreen';
$password = '3N2h0DEwaDJ#';
$database = 'rectubmx_simplegreenenergy';

// Create a new PHPMailer instance for sending emails
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the database connection
if ($conn->connect_error) {
    echo 'error';
    exit();
}

// SQL query to retrieve data from the users table
$sql = "SELECT * FROM users WHERE fno = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $fno);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Get the surveyor's email
    $surveyorEmail = $_POST['surveyorEmail'];

    // Compose the email
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@example.com'; // Your email
    $mail->Password = 'your_password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('your_email@example.com', 'Your Name');
    $mail->addAddress($surveyorEmail);
    $mail->isHTML(true);
    $mail->Subject = 'Survey Appointment Details';
    $mail->Body = "You have a survey appointment for f.no: $fno on {$_POST['surveyDateTime']}. Data from the user table:<br>";
    
    foreach ($row as $key => $value) {
        $mail->Body .= "$key: $value<br>";
    }

    // Send the email
    if ($mail->send()) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error'; // Handle the case where no data was found for the given f.no
}

// Close the database connection
$stmt->close();
$conn->close();
?>