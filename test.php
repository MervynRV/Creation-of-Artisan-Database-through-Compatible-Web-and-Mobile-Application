<?php
$insert = false;
if (isset($_POST['Signup'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jploka";

    // Create a new mysqli instance
    $con = new mysqli($server, $username, $password, $database);

    // Check for database connection errors
    if ($con->connect_error) {
        die("Connection to the database failed due to: " . $con->connect_error);
    }

    // Prepare the SQL statement using prepared statements
    $sql = "INSERT INTO `signup page` (`Name`, `Email`, `Password`, `Mobile Number`, `Category`, `Others`, `Address`, `Postal Code`, `Occupation`, `Experience`, `Dob`, `Aadhar Number`, `Image`, `Pan`, `Ac Name`, `Ac no`, `Branch name`, `IFSC code`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $con->prepare($sql);

    // Hash the password before storing in the database
    $hashedPassword = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    // Bind the values to the prepared statement
    $stmt->bind_param("ssssssssssssssssss", $_POST['Name'], $_POST['Email'], $hashedPassword, $_POST['MobileNumber'], $_POST['Category'], $_POST['Others'], $_POST['Address'], $_POST['Postalcode'], $_POST['Occupation'], $_POST['Experience'], $_POST['Dob'], $_POST['Aadharnumber'], $_POST['Image'], $_POST['Pan'], $_POST['Acname'], $_POST['Acno'], $_POST['Branchname'], $_POST['IFSCcode']);

    // Execute the prepared statement
    if ($stmt->execute()) {
        $insert = true;
    } else {
        echo "ERROR: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>
