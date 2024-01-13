<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "jploka";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 $query = "SELECT * from signup_page where Aadharnumber = 487512456398";
$data = mysqli_query($conn,$query);
 if (mysqli_num_rows($data)>0){

  while ($row = mysqli_fetch_assoc($data)){

    $Aadhar = $row['Aadharnumber'];
    $Name = $row['Name'];
    $Email = $row['Email'];
    $Mobile = $row['MobileNumber'];
    $Address  = $row ['Address'];
    $Category = $row ['Category'];
    $Occupation = $row ['Occupation'];
    $Exp = $row ['Experience'];
    $Dob = $row ['Dob'];
    $Pan = $row ['Pan'];
    $Post = $row ['Postalcode'];

  }

 }


?>