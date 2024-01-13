<?php
// session_start();

// // Include Twilio autoload file
// require_once 'path/to/vendor/autoload.php'; // Update the path to autoload.php

// use Twilio\Rest\Client;

// // Your Twilio credentials
// $sid    = "ACedd35045787f8812b17c77d767456c98";
// $token  = "988b750a80b36cee56b0b8e76771ecd2";
// $from = "+12513339517"; // Your Twilio "from" phone number

// // Get the phone number from the client-side request
// $phone = $_POST['Phone'];

// // Generate a random 6-digit OTP
// $otp = rand(100000, 999999);

// // Save the phone number and OTP in the session
// $_SESSION['otp_phone'] = $phone;
// $_SESSION['otp_code'] = $otp;

// // Initialize Twilio client
// $twilio = new Client($sid, $token);

// // Compose the message body
// $body = "Your OTP is: $otp";

// try {
//     // Send the OTP using Twilio
//     $message = $twilio->messages->create(
//         $phone, // to
//         [
//             "from" => $from,
//             "body" => $body
//         ]
//     );

//     // Optionally, you can print the message SID for debugging purposes
//     // echo "Message SID: " . $message->sid;
// } catch (Exception $e) {
//     // Handle Twilio exception, if any
//     echo "Error sending OTP: " . $e->getMessage();
//     exit();
// }

// // Redirect the user back to the OTP page
// header("Location: otp.html");
// exit();
?>

<?php
session_start();

// Your Twilio credentials
$sid    = "your_twilio_sid";
$token  = "your_twilio_token";
$from = "+12513339517"; // Your Twilio "from" phone number

// Get the phone number from the client-side request
$phone = $_POST['Phone'];

// Generate a random 6-digit OTP
$otp = rand(100000, 999999);

// Save the phone number and OTP in the session
$_SESSION['otp_phone'] = $phone;
$_SESSION['otp_code'] = $otp;

// Insert data into the "otp" table in your database (replace with your database credentials)
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to insert OTP and phone into the "otp" table
$sql = "INSERT INTO otp (Phone, Otp) VALUES ('$phone', '$otp')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

// Initialize Twilio client
$twilio = new Client($sid, $token);

// Compose the message body
$body = "Your OTP is: $otp";

try {
    // Send the OTP using Twilio
    $message = $twilio->messages->create(
        $phone, // to
        [
            "from" => $from,
            "body" => $body
        ]
    );

    // Optionally, you can print the message SID for debugging purposes
    // echo "Message SID: " . $message->sid;
} catch (Exception $e) {
    // Handle Twilio exception, if any
    echo "Error sending OTP: " . $e->getMessage();
    exit();
}
// Redirect the user back to the OTP page
header("Location: otp.html");
exit();
?>
