<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Janapada Loka</title>
    <link rel="shortcut icon" href="images/logobgl.png" type="images/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!--Bootstrap CSS--> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <!--Bootstrap CSS--> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--Our CSS--><link rel="stylesheet" href="eventstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
   <!--Bootstrap CSS-->
   <section class="folk">
    <div class="container">
        <div class="row">
        <!--Text-->
        <div class="col-md-6">

            <div class="text">

                <h2>Event Booking Form</h2>
            
                      <form action = "eventbookingdb.php" method = "POST">
                  
                   <div class="form-group">
                            <label for="eventDate">Event Date</label>
                            <input type="date" name="date" id="eventDate" name="eventDate" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="eventTime">Event Time</label>
                            <input type="time" name = "time" id="eventTime" name="eventTime" required>
                          </div>
                  
                  
                  
                          <div class="form-group">
                          <label for="event">Event:</label>
                          <label for="event">Select an event:</label>
<select id="event" onchange="updatePrice()">
  <option value="event1">Event 1</option>
  <option value="event2">Event 2</option>
  <option value="event3">Event 3</option>
  <option value="event4">Event 4</option>
</select>
<br>
<br>
<label for="tickets">Number of Tickets:</label>
<input type="number" id="tickets" min="0" onchange="calculateTotal()">
<br>
<br>
<p>Event Price: <span id="eventPrice">₹0.00</span></p>
<p>Total Cost: <span id="total">₹0.00</span></p>


                         
                        
                                 
                        
                        
                        
                        
                        
                        <!-- <div class="form-group">
                          <label for="tickets">Number of Tickets:</label>
                          <input type="number" name = "no" id="tickets" placeholder="Enter the number of tickets" onchange="calculateTotal()">
                        </div> -->
                        
                        
                       
                       <!-- <div class="form-group">
      <label for="total">Total Cost:</label>
      <input type="number" id="total" readonly>
    </div> -->
                        <div class="alert alert-danger" role="alert">
                                NOTE:Take advantage of our exclusive offer for students/employees  :
                         a 15% discount when you show your ID Card!!! 
                        </div>
                  <h3>Personal Details</h3>
                  
                  <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" name = "name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" name = "email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone:</label>
                          <input type="tel" name = "phone" id="phone" placeholder="Enter your phone number">
                        </div>
                   <div class="form-group">
                          <label for="Aadhar number">Aadhar:</label>
                          <input type="number" name = "aadhar" id="aadhar" placeholder="Enter your aadhar number">
                        </div>
                  
                       <button type = "submit" class = "btn btn-primary">submit</button>
                  
                  
                  
                  
                      </form>
                    </div>
                    <script src="event_booking.js"></script>
                  </body>
                  </html>

                  














              




               
              
          




















              
            
                
                
            
        </div>
        <!--images-->
        <div class="col-md-6">
            <img src="images/bkl11.png" alt="Folk images" class="w-100">
        </div>
    </div>

    </div>
   </section>
   <!--Footer-->
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
   <!--Bootstrap CSS-->
   <!--Bootstrap CSS-->
   <!--Bootstrap CSS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  <!-- INSERT INTO `event` (`date`, `time`, `eve`, `no`, `cost`, `name`, `em`, `ph`, `aadhar`) VALUES ('12/11/2023', '18:00:00', '', '3', '50', 'rr', 'rey23@gmail.com', '8492840931', '931104010295'); -->
</html>