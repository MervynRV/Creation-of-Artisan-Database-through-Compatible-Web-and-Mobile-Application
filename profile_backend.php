<!DOCTYPE html>
<html>
<head>
  <title>Customer Profile</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-Janapada Loka</title>
    <link rel="shortcut icon" href="images/logobgl.png" type="images/x-icon">
    <!--Bootstrap CSS--> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--Our CSS--><link rel="stylesheet" href="profilestyle.css">
</head>
<body>
    <!--Navbar section-->
   <nav class="navbar navbar-expand-lg">
   <div class="nav__list-item">
      <a href="#" class="nav__link n1" id="google_translate_element"></a>
    </div>
    <script type="text/JavaScript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          defaultLanguage: 'en',
          pageLanguage: 'en',
          includedLanguages: 'kn,en,hi,ml',
          layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
          autoDisplay: true,
          multilanguagePage: true
        }, 'google_translate_element');
      }
    
      // Function to reinitialize translation after redirect
      function initGoogleTranslate() {
        if (typeof google !== 'undefined' && google.translate) {
          googleTranslateElementInit();
        }
      }
    </script>
    <script type="text/JavaScript" src="https://translate.google.com/translate_a/element.js?cb=initGoogleTranslate"></script>
    <div class="container">
      <a class="navbar-brand" href="afterlogin.html">
        <img src="images/logobgl.png" alt="brand" class="logo">
        JANAPADA LOKA
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="afterlogin.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>

          <li class="nav-item">
            <button style="font-size:24px; background: none; border: none; color: #788190; margin-left: 25px;"><i class="fa fa-bell"></i></button>
          </li>
          <li class="nav-item">
            <button style="font-size:24px; background: none; border: none; color: #788190; margin-left: 25px;"><i class="fa fa-user"></i></button>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <section id="personal-info">
    <h2>Personal Information</h2>
    <section style="background-color: #eee;">
      <div class="container py-5">
        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
              </ol>
            </nav>
          </div>
        </div>
    

        <?php include 'db.php';
               ?>
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
               <img src="images/logobgl.png" alt="Blob Image";>
               <h5 class="my-3"><?php echo $Name; ?></h5>
                <p class="text-muted mb-1"><?php echo $Occupation; ?> </p>
                <p class="text-muted mb-4">Experience: <?php echo $Exp ?></p>
                <div class="d-flex justify-content-center mb-2">
                  <button type="button" class="btn btn-primary">Edit</button>
                  <a href = "index.html"><button type="button" class="btn btn-outline-primary ms-1">Logout</button></a>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"> <?php echo $Name; ?> </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"> <?php echo $Email; ?> </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Mobile</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"> <?php  echo $Mobile; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Aadhar</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $Aadhar; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Address</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $Address; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Category</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"> <?php  echo $Category; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Postal code</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"> <?php  echo $Post; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">DOB</p>
                  </div>
                  <div class="col-sm-9">
                    <p > <?php  echo $Dob; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
            </div>
         </div>
      </div>

      <div>
              <input type="image" src="images/printing.png" alt="Submit" onclick="window.print()">
              <button type="button" class="btn btn-primary" onclick="window.print()">print</button>
              </div>

    </section>
    <!-- Add more personal information fields as needed -->
  </section>
  
  <footer class="section-p1">
    <div class="col">
      <img src="images/logobgl.png" alt="" class="logo">
      <h4>Contact</h4>
      <p><strong>Address:</strong> IIIC - Christ University kengeri campus</p>
      <p><strong>Hours</strong> 9:00 am - 4:00 pm</p>
      <h4>Follow us</h4>
      <div class="follow">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
      </div>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="#">About us</a>
      <a href="#">Delivery information</a>
      <a href="#">Privacy policy</a>
      <a href="#">Terms & conditions</a>
      <a href="#">Contact us</a>
    </div>
    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign - in</a>
      <a href="#">View Cart</a>
      <a href="#">My wishlist</a>
      <a href="#">Track my orders</a>
      <a href="#">Help</a>
    </div>
    <div class="col install">
      <h4>Install App</h4>
      <p>From app Store or play store
      </p>
      <div class="row">
        <img src="images/play.png" alt="" style="max-width: 170px; max-height: 50px;">
      </div>
      <p>Securted payment Gateways</p>
      <img src="images/pay.png" alt="">
    </div>
    <div class="copyright">
      <p>Developed & Maintained by IIIC - Christ University, Kengeri</p>
    </div>
  </footer>
</body>
</html>
