<?php
if(isset($_POST['done'])){
$server = "localhost";
$username = "root";
$password = "";
$database = "hotel";


$con = mysqli_connect($server, $username, $password, $database);

if(!$con){
    die("connection to thsi db failed due to ".
    mysqli_connect_error());
}
echo "Ok connected";
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$occupants = $_POST['occupants'];

$sql = "INSERT INTO `mariott` (`checkin`, `checkout`, `occupants`, `timestamp`) VALUES ( '$checkin', '$checkout', '$occupants', current_timestamp());";
echo $sql;

if($con->query($sql) == true){
    echo "Successfully inserted";
}
else{
    echo "ERROR: $sql <br> $conn->error ";

}

$con->close();
}
?>
