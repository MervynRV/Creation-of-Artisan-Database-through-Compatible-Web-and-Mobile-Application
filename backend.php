<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to thsi db failed due to ".
    mysqli_connect_error());
}
echo "Ok connected";
?>
<!-- -INSERT INTO `checkin` (`sn`, `checkin`, `checkout`, `occupants`, `timestamp`) VALUES (NULL, '2023-07-06', '2023-07-07', '12', current_timestamp()); -->