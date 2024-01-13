<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jploka";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Query to retrieve the blob image from the table
$sql = "SELECT Image FROM signup_page WHERE Name = 'Satyam' ;";
$result = mysqli_query($con,$sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['Image'];

    // Display the image
    header("Content-type: image/jpeg");
    echo $imageData;
} else {
    echo "No image found";
}

?>
