<?php
session_start();

if (isset($_POST["Phone"])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jploka";

    $Phone = $_POST["Phone"];
    $Password = $_POST["Password"];

    $con = new mysqli($server, $username, $password, $database);

    if ($con->connect_error) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
    } else {
        $stmt = $con->prepare("select * from `signup` where Phone = ?");
        $stmt->bind_param("i", $Phone);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $hashedPassword = $data['Password'];

            // Verify the entered password against the stored hashed password
            if (password_verify($Password, $hashedPassword)) {
                // Set the phone number in the session after successful authentication
                $_SESSION['phone'] = $Phone;
                echo "<h1>Login Successfully</h1>";
                echo "<script>location.replace('profile.php')</script>";
            } else {
                echo "<h1>Invalid Credentials</h1>";
            }
        } else {
            echo "<h1>Invalid Credentials</h1>";
        }
        $stmt->close();
        $con->close();
    }
}
?>
