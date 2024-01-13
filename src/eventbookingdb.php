<?php
    //$insert = false;
    if(isset($_POST['name'])){
        $server="localhost";
        $username= "root";
        $password="";
        $database = "jploka";
        $con = mysqli_connect($server, $username, $password,$database);

        if(!$con){
            die("Connection to this database failed due to" . mysqli_connect_error());
        }
        //echo"Success connecting to the db";
        $date = $_POST['date'];
        $time = $_POST['time'];
        $eve = $_POST['eve'];
        $no = $_POST['no'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $aadhar = $_POST['aadhar'];

        $sql = "INSERT INTO `event` (`date`, `time`, `eve`, `no`, `name`, `em`, `ph`, `aadhar`,`Timestamp`) VALUES ('$date', '$time', '$eve', '$no','$name', '$email', '$phone', '$aadhar',current_timestamp())";
        if($con->query($sql) == true){
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> " . mysqli_error($con);
        }
        $con->close();
        header("Location: payment.html");
    }
?>