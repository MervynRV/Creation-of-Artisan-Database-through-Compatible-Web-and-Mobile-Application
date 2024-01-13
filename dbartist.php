<?php
  //$insert = false;
  if(isset($_POST['submit'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jploka";
    
    $con = mysqli_connect($server, $username, $password, $database);
    if (!$con) {
      die("Connection to the database failed due to: " . mysqli_connect_error());
    }

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Phone = $_POST['Phone'];
    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

    // Using prepared statements to prevent SQL injection
    $sql = $con->prepare("INSERT INTO `signup` (`Name`, `Email`, `Password`, `Phone`, `Timestamp`) VALUES (?, ?, ?, ?, current_timestamp())");
    $sql->bind_param("ssss", $Name, $Email, $hashedPassword, $Phone);

    if($sql->execute()) {
      $insert = true;
    } else {
      echo "ERROR: " . $sql->error;
    }

    $sql->close();
    $con->close();
    header('Location: index.html');
  }
?>
