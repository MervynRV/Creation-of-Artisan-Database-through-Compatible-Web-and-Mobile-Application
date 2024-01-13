<?php
// // Update the path below to your autoload.php,
// // see https://getcomposer.org/doc/01-basic-usage.md
// require_once 'C:\xampp\htdocs\practisehomepage\vendor\autoload.php';
// use Twilio\Rest\Client;

// // Your Twilio credentials
// $sid    = "ACedd35045787f8812b17c77d767456c98";
// $token  = "988b750a80b36cee56b0b8e76771ecd2";

// // Your Twilio "from" phone number
// $from = "+12513339517";

// // Your message body
// $body = "Otp is 123564";

// // Get the phone number from the client-side request
// //$phone = $_POST['phone'];
// $phone = "+919340603618";
// // Create a Twilio client
// $twilio = new Client($sid, $token);

// // Send a Twilio message
// $message = $twilio->messages
//   ->create($phone, // to
//     array(
//       "from" => $from,
//       "body" => $body
//     )
//   );

// // Print the SID for debugging purposes
// print($message->sid);
?>

<?php
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'C:\xampp\htdocs\practisehomepage\vendor\autoload.php';
use Twilio\Rest\Client;

// Your Twilio credentials
$sid    = "ACedd35045787f8812b17c77d767456c98";
$token  = "988b750a80b36cee56b0b8e76771ecd2";

// Your Twilio "from" phone number
$from = "+12513339517";

// Your message body
$body = "Otp is 123564";

// Get the phone number from the client-side request
// $phone = "+919340603618";  // Replace this with the phone number from your form input
$phone = $_POST['phone'];
// Create a Twilio client
$twilio = new Client($sid, $token);

// Send a Twilio message
$message = $twilio->messages
  ->create($phone, // to
    array(
      "from" => $from,
      "body" => $body
    )
  );

// Print the SID for debugging purposes
print($message->sid);
?>
