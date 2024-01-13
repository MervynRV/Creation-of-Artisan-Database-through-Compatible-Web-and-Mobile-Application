<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logobgl.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <title>Confirm Booking</title>
    <script defer src="gallery.js"></script>
    
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
      <a class="navbar-brand" href="#">
        <img src="images/logobgl.png" alt="brand" class="logo">
        JANAPADA LOKA
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                        Confirm your booking!
                    </div>
                    <div class="text-2"> Check-in begins at 9:30am.</div>
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
      </section>
      <div class="container" style="margin-top: 3rem;margin-bottom: -1rem;">
        <div class="row"><p style="text-align: center;font-size: 3rem;font-weight: 300;color: #758954;">Photo Gallery</p></div>
      </div>
      <section aria-label="Newest Photos" style="margin-bottom: 1rem;">
        <div class="carousel" data-carousel>
            <button data-carousel-button="prev" class="carousel-button prev">&#8592;</button>
            <button data-carousel-button="next" class="carousel-button next">&#8594;</button>
            <ul data-slides>
                <li class="slide" data-active>
                    <img src="images/hotel1.jpg" alt="Hotel 1">
                </li>
                <li class="slide">
                    <img src="images/hotel2.jpg" alt="Hotel 2">
                </li>
                <li class="slide">
                    <img src="images/hotel3.jpg" alt="Hotel 3">
                </li>
                <li class="slide">
                    <img src="images/hotel4.jpg" alt="Hotel 4">
                </li>
                <li class="slide">
                    <img src="images/hotel5.jpg" alt="Hotel 5">
                </li>
            </ul>
        </div>
      </section>
      <div class="container" style="margin-bottom: 2rem;">
        <h2 style="font-weight: 300;color: #758954;margin-bottom: 1rem;">About:</h2>
        <h2 class="lead" id="desc">All our guestrooms are elegantly furnished with handmade furniture include luxury en-suite facilities with complimentary amenities pack, flat screen LCD TV, tea/coffee making facilities, fan, hairdryer and the finest pure white linen and towels.A welcoming, tastefully presented hotel, with a spacious bedroom and comfortable bed. Staff were lovely and breakfast was delicious. It was ideally located for exploring South Kent.
        <br><br><b>Liked: Cleanliness, staff & service, amenities, property conditions & facilities.</b>
        <br><b>Rating:10/10</b>
        </h2>
        <h2 style="margin-top: 2rem; font-weight: 300;color: #758954;margin-bottom: 1rem;">Facilities:</h2>
        <h2 class="lead" id="desc">TVs, sound systems, refrigerators, mini-bars, free Wi-Fi, coffee-makers, hairdryers, and more.
        </h2>
        <h2 style="margin-top: 2rem; font-weight: 300;color: #758954;margin-bottom: 1rem;">Type:</h2>
        <h2 class="lead" id="desc" style="font-size: 2rem;"><b>Hotel(Ritz-Carlton)</b>
        </h2>
      </div>
      
      <div class="text-2" style="color: #758954; font-size: 2.7rem;margin-bottom: 2rem;font-weight: 300;">Confirm Check-in and Check-out dates!</div>
        <form id="date-form" style="text-align: center;" method="" action="#">
            <div class="container">
                <div class="row">
                    <div class="wrapper" style="width: 50%;">
                        <label for="datepicker" class="datelabel" style="width: 50%;" ><p style="color: #758954;padding-left: 0.7rem;">Check-in</p>
                            <input placeholder="DD-MM-YYYY" required type="text" id="datepicker" autocomplete="off">
                        </label>	
                    </div>
                </div>
                <div class="row">
                    <div class="wrapper" style="width: 50%;">
                        <label for="datepicker2" class="datelabel" style="width: 50%;"><p style="color: #758954;padding-left: 0.7rem;">Check-out</p>
                            <input placeholder="DD-MM-YYYY" required type="text" id="datepicker2"autocomplete="off">
                        </label>	
                    </div>
                </div>
                <div class="row">
                    <div class="wrapper" style=" width: 30%;">
                        <label for="numberofpeople" class="datelabel" style="width: 60%;"><p style="color: #758954;padding-left: 0.7rem;">Occupants</p>
                            <input placeholder="eg: 4" required type="number" id="numberofpeople">
                        </label>	
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 cold-lg-12" style="margin-bottom: 3rem;">
                        <button  type="submit" class="submit_button">Done</button>
                    </div>
                </div>    
            </div>
            </form>
        
    <!-- Footer -->    
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
    
    <!-- Html entities use hex/html/unicode to be represented -->