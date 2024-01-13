<?php
session_start();

if (isset($_SESSION['phone']) && isset($_POST['submit'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jploka";

    $con = mysqli_connect($server, $username, $password, $database);
    if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
    }

    $phone = $_SESSION['phone'];
    $FaName = $_POST['Father'];
    $Name = $_POST['Name'];
    $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT); // Hash the password
    $Email = $_POST['Email'];
    $Bio = $_POST['bio'];
    $date = $_POST['dob'];
    $art = $_POST['art'];
    $country = $_POST['Country'];
    $Bname = $_POST['bname'];
    $Ano = $_POST['Aname'];
    $ifsc = $_POST['ifsc'];
    $brname = $_POST['brname'];
    $micr = $_POST['micr'];

    // Using prepared statement to avoid SQL injection
    $sql = "UPDATE signup SET Name=?, FatherName=?, Email=?, Password=?, ArtStyle=?, Bio=?, Dob=?, Country=?, BankName=?, Accno=?, IFSC=?, Branch=?, MICR=? WHERE Phone=?";
    
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssssssssssssss', $Name, $FaName, $Email, $Password, $art, $Bio, $date, $country, $Bname, $Ano, $ifsc, $brname, $micr, $phone);


    if ($stmt->execute()) {
        $updateSuccess = true;
    } else {
        echo "ERROR: " . $stmt->error;
    }

    $stmt->close();
    $con->close();

    // Redirect to the profile page after updating
    header('Location: profile.php');
}
?>
