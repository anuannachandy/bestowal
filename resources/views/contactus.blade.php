<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icons -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- All CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Elearning - Tutor, Education HTML Template</title>
  </head>
  <body>

    <!-- Preloader -->
    <div id="preloader">
      <div id="status"></div>
    </div>
    @include('header')

    <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Contact</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Contact</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Contact section start -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline">Contact us</span>
              <h3 class="sec-title">If You Have Any Query, <br>Drop a Message</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">            
            <form action="home-01.html">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="f_name">Full name</label>
                  <input type="text" class="form-control" id="f_name" placeholder="Full Name" required>
                </div>
                <div class="form-group col-sm-6">
                  <label for="l_name">Full name</label>
                  <input type="text" class="form-control" id="l_name" placeholder="Last name">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email address" required>
                </div>
                <div class="form-group col-sm-6">
                  <label for="phone">Phone number</label>
                  <input type="text" class="form-control" id="phone" placeholder="Phone number">
                </div>
              </div>         
              <div class="form-group">
                <label for="message">Your Message</label>
                <textarea name="message" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
              </div>              
              <button type="submit" class="btn btn-default">send message</button>
            </form>
          </div>
          <div class="col-md-4">
            <aside class="sidebar">
              <div class="widget contact-info">
                <h3 class="widget-title">Contact info</h3>
                <p>BESTOWAL InfoTechS  is  a  software solutions company which provides Internet and IT  support,in addition to  project management, strategic, and business  solutions,  integrated in to  their clients’business  processes.</p>
                <div>
                  <h6>Location Info</h6>
                  <span><strong>First Floor Christy's Building, Nalanda Road, Plamoodu, Trivandrum - 695003</strong></span>
                </div>
                <div>
                  <h6>Hotline numbers</h6>
                  <i class="icon-phone"></i><strong>09496468990</strong><br>
                  <i class="icon-phone"></i><strong>+0956-788-1444</strong><br>
                  <i class="icon-phone"></i><strong>+91-471-4851990</strong>
                </div>
                <div>
                  <h6>Email Us</h6>
                  <a href="mailto: mail@bestowal.info">mail@bestowal.info</a>
                  
                </div>                
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact section end -->

    <!-- Map start -->
    <section class="map-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <h3 class="sec-title">Location Map</h3>
            </div>
          </div>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.8543549245405!2d76.94664931427394!3d8.513518799194427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05bbc8381c6255%3A0x18abe5cf03491b54!2sBESTOWAL+InfoTechS+(BITS)!5e0!3m2!1sen!2sin!4v1549301906100" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- Map end -->

    @include('footer')

    <!-- JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>