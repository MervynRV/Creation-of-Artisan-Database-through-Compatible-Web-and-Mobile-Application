<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookCSS.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--Bootstrap CSS--> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logobgl.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="scriptjs.js"></script>

    <title>Book Your Stay!</title>
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

    <section class="folk">
        <div class="container">
            <div class="row">
            <!--Text-->
                <div class="col-md-6">
                    <div class="text">
                        Hotels and Farmhouses, wherever you want!
                    </div>
                    <div class="text-2"> We make your travel memorable.</div>
                    <!-- <div class="buttons">
                        <a href="login.html"class="btn btn-primary">Login</a>
                        <a href="signup.html"class="btn btn-outline-secondary ms-3">Sign Up</a>
                    </div> -->
                </div>
                <!--images-->
                <div class="col-md-6">
                    <img src="images/bkl11.png" alt="Folk Image" class="w-100">
                </div>    
            </div>
        </div>

    <div class="container" id="search_container" style="margin-top: 2rem;">
      <form class="search_form" method="">
        <div class="text" style="font-size: 2rem;text-align: center;">
          <label class="search-label" for="search_city" >Search Localities </label>
        </div>
          <input data-search type="search" class="searchbar" id="search_city" style="padding-left: 2rem;" placeholder="Start typing...">
          <!-- <div class="buttons" style="margin-top: -3.5rem;">
            <button class="submit_button">Done</button>
          </div> -->
        </form>
    </div>
    <div class="text" style="font-size: 2.5rem;margin: 0 38% 0 38%; text-align: center;font-weight: 500;">
      <p>Results</p>
    </div>
    </section>
    <div class="centered">
      <button onclick="myFunction();change()" class="hide-button" id="hide-button">Hide</button>
    </div>
    
    <!-- Result cards -->
<div class="result-container" id="displayresults">
  <div class="container" >
    <div class="row" data-user-cards-display>
      
      
    <div class="col-lg-4 mb-4">
  <div class="card">
    <img class="card-img-top" src="images/c1.png">
    <div class="card-body">
      <h2 class="card-title" data-hotel>Hotels</h2>
      <h4 class="card-subtitle" data-stay>Hotel</h4>
      <p class="card-text" data-city>
        Venice
      </p>
      <p class="card-text" data-price>
        20000 INR
      </p>
      <div class="card-footer d-flex justify-content-between">
        <a href="booknow0.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>


          
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/2.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel>Hotels</h2>
            <h4 class="card-subtitle" data-stay>Hotel</h4>
            <p class="card-text" data-city>
              Beverly Hills
            </p>
            <p class="card-text" data-price>
              25000 INR
            </p>
            <div class="card-footer d-flex justify-content-between">
        <a href="booknow0.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>
      
      <div class="col-lg-4 mb-4">
        <div class="card" >
          <img class="card-img-top" src="images/8.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel>Hotels</h2>
            <h4 class="card-subtitle" data-stay>Farmhouse</h4>
            <p class="card-text" data-city>
              Queenstown
            </p>
            <p class="card-text" data-price>
              12000 INR
            </p>
            <div class="card-footer d-flex justify-content-between">
        <a href="booknow0.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>

      <div class="col-lg-4 mb-4">
        <div class="card" >
          <img class="card-img-top" src="images/3.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel>Conventional hall</h2>
            <h4 class="card-subtitle" data-stay>Hotel</h4>
            <p class="card-text" data-city>
              Santorini
            </p>
            <p class="card-text" data-price>
              10000 INR
            </p>
            <div class="card-footer d-flex justify-content-between">
        <a href="booknow1.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>

      <div class="col-lg-4 mb-4">
        <div class="card" >
          <img class="card-img-top" src="images/9.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel>Conventional hall</h2>
            <h4 class="card-subtitle" data-stay>Hotel</h4>
            <p class="card-text" data-city>
              Manama
            </p>
            <p class="card-text" data-price>
              9000 INR
            </p>
            <div class="card-footer d-flex justify-content-between">
        <a href="booknow1.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>

      <div class="col-lg-4 mb-4">
        <div class="card" >
          <img class="card-img-top" src="images/6.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel>Conventional hall</h2>
            <h4 class="card-subtitle" data-stay>Hotel</h4>
            <p class="card-text" data-city>
              Bengaluru
            </p>
            <p class="card-text" data-price>
              16000 INR
            </p>
            <div class="card-footer d-flex justify-content-between">
        <a href="booknow1.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>
      
      <div class="col-lg-4 mb-4">
        <div class="card" >
          <img class="card-img-top" src="images/7.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel>Farmouse</h2>
            <h4 class="card-subtitle" data-stay>Farmhouse</h4>
            <p class="card-text" data-city>
              Tuscany
            </p>
            <p class="card-text" data-price>
              11000 INR
            </p>
            <div class="card-footer d-flex justify-content-between">
        <a href="booknow2.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>

      <div class="col-lg-4 mb-4">
        <div class="card" >
          <img class="card-img-top" src="images/4.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel> Farmhouse</h2>
            <h4 class="card-subtitle" data-stay>Farmhouse</h4>
            <p class="card-text" data-city>
              Bali
            </p>
            <p class="card-text" data-price>
              12500 INR
            </p>
            <div class="card-footer d-flex justify-content-between">
        <a href="booknow2.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/2.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel>Farmhouse</h2>
            <h4 class="card-subtitle" data-stay>Hotel</h4>
            <p class="card-text" data-city>
              Beverly Hills
            </p>
            <p class="card-text" data-price>
              25000 INR
            </p>
            <div class="card-footer d-flex justify-content-between">
        <a href="booknow2.php" class="btn btn-outline-primary btn-lg" id="btn-booknow">
          Book Now!
        </a>
        <div class="room2">
          <span>10 rooms left</span>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- --------------------------------------------- Template ------------------------------------------------- -->

    <template data-user-template>
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/1.jpg"/>
          <div class="card-body">
            <h2 class="card-title" data-hotel> <!-- Name of the hotel --></h2>
            <h4 class="card-subtitle" data-stay> <!-- Hotel/Farmhouse --> </h4>
            <p class="card-text" data-city>
              <!-- City -->
            </p>
            <p class="card-text" data-price>
              <!-- Price -->
            </p>
            
            <a href="booknow.html" class="btn btn-outline-primary btn-lg" id="btn-booknow">
              Book Now!
            </a>
          </div>
        </div>
      </div>
    </template>
      
     <!-- ------------------------------------------------------------------------------------------------------- -->
      
     <!--Footer-->
      <footer class="section-p1">
        <div class="col">
        <a href="index.html"><img src="images/logobgl.png" alt="" class="logo"></a>
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

