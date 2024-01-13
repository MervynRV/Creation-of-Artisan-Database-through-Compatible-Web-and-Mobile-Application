<?php
// Check if the user is logged in and retrieve their phone number from the session
session_start();
if (!isset($_SESSION['phone'])) {
    header('Location: artistlogin.html'); // Redirect to login page if not logged in
    exit();
}

$phone = $_SESSION['phone'];

// Fetch user data from the signup table
$server = "localhost";
$username = "root";
$password = "";
$database = "jploka";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("Connection to the database failed due to: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `signup` WHERE `Phone` = '$phone'";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Error retrieving user data: " . mysqli_error($con));
}

if ($row = mysqli_fetch_assoc($result)) {
    // Extract user data
    $name = $row['Name'];
    $email = $row['Email'];
    $phone = $row['Phone'];
    $faname = $row['FatherName'];
    $arts = $row['ArtStyle'];
    $bio = $row['Bio'];
    $dob = $row['Dob'];
    $country = $row['Country'];
    $bname = $row['BankName'];
    $ano = $row['Accno'];
    $micr = $row['MICR'];
    $ifsc = $row['IFSC'];
    $Branch = $row['Branch'];
    
    // ... (extract other fields similarly)
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Janapada Loka profile</title>
        <link rel="stylesheet" href="profilestyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4">
                Account settings
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Info</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Bank Account Details</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                            <!-- <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-connections">Connections</a> -->
                                <!-- <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-notifications">Notifications</a> -->
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="account-general">
                                        <div class="card-body media align-items-center">
                                            <img src="./images/logo.jpg" alt
                                            class="d-block ui-w-80" id="img">
                                            <div class="media-body ml-4">
                                                <label class="btn btn-outline-primary">
                                                    Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body" id="nana">
                            <div class="form-group">
                                <label class="form-label"><strong>Name</strong></label><br>
                                <span id="name"><?php echo $name; ?></span>
                            </div>
                                    <!-- <input type="text" class="form-control mb-1" value="name"> --> 
                                <div class="form-group">
                                    <label class="form-label"><strong>Father's Name</strong></label><br>
                                    <span id="FatherN"><?php echo $faname; ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><strong>Email</strong></label><br>
                                    <span><?php echo $email; ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="art"><strong>Art Style</strong></label><br>
                                    <span><?php echo $arts; ?></span>
                                    <!-- <select name="art" id="art">
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                        <option value="Bharatnatyam">Bharatnatyam</option>
                                    </select> -->

                                    <!-- <input type="text" class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><strong>Other</strong></label><br>
                                    <span>other art style span area</span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label"><strong>Bio</strong></label><br>
                                    <span><?php echo $bio; ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><strong>Date of Birth</strong>  
                                    </label><br>
                                    <span><?php echo $dob; ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><strong>Country</strong></label>
                                    <br>
                                    <span><?php echo $country; ?></span>
                                </div>
                                
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label"><strong>Phone</strong></label><br>
                                    <span><?php echo $phone; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label"><strong>Bank name</strong></label><br>
                                    <span><?php echo $bname; ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><strong>Account Number</strong></label><br>
                                    <span><?php echo $ano; ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><strong>MICR Code</strong>
                                    </label><br>
                                    <span><?php echo $micr; ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><strong>IFSC Code</strong></label><br>
                                    <span><?php echo $ifsc; ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><strong>Branch name</strong></label><br>
                                    <span><?php echo $Branch; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <a href="profileedit.html"><button type="button" class="btn btn-primary">Edit</button>&nbsp;</a>
            <!-- <button type="button" class="btn btn-default">Cancel</button> -->
            <a href="index.html"><button type="button" class="btn btn-primary">Signout</button>&nbsp;</a>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function print(){
            var dp1 = document.getElementById("name");
            var dp2 = document.getElementById("FatherN")
        }
    </script>
</body>

</html>