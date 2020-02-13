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
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <title>Bestowal Infotech|Training</title>
  </head>
  <body>

    <!-- Preloader -->
    <div id="preloader">
      <div id="status"></div>
    </div>

    @include('header')

    <!-- Slider section start -->
    <section class="slider-banner p-0">
      <div class="slider-carousel owl-carousel">
        <div class="slide slide-3" style="background-image: url(images/slider/1.jpg);"></div>
        <div class="slide slide-1" style="background-image: url(images/slider/2.jpg);"></div>
        <div class="slide slide-2" style="background-image: url(images/slider/3.jpg);"></div>
      </div>
      <div class="container">
        <div class="col-md-11 slider-content m-auto">
         <h2><span>Learn!</span>From Experts</span></h2>
          <!--<form class="search-form" action="#">
            <select name="country">
              <option>All Categories</option>
              <option value="usa">IT & Software</option>
              <option value="canada">Development</option>
              <option value="australia">Marketing & SEO</option>
            </select>
            <input type="text" placeholder="Enter a Subject">
            <button type="submit"><i class="ti-search"></i></button>
          </form>-->
        </div>
      </div>
    </section>
    <!-- Slider section end -->

    <!-- Feature Box section start -->
    <section class="featureBox">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="sfBox">
              <i class="fas fa-drafting-compass"></i>
              <strong>Best Training Solution</strong>
              <span>Explore a variety of fresh topics</span>
            </div>
          </div>
         
          <div class="col-md-4 d-md-flex justify-content-md-end">
            <div class="sfBox mb-0">
              <i class="fas fa-history"></i>
              <strong>Best Place For</strong>
              <span>Reinventing Reality</span>
            </div>
          </div>
           <div class="col-md-4 d-md-flex justify-content-center">
            <div class="sfBox">
              <i class="fa fa-handshake"></i>
              <strong>Join Us</strong>
              <span>You will get the best training</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature Box section end -->
    <!-- Trial section start -->
    <section class="trial-sec">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="coupon">
              <h2 class="coupon-title">50% Discout <br/> Voucher <span>on your next Enroll</span></h2>
              <div class="clock"></div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <form action="#" class="form trial-form bg-light">
              <h4 class="form-title">Latest News</h4>
              
                
                    <marquee direction = "up" scrollamount="2" height="200" onmouseover="this.stop();" onmouseout="this.start();">
                   @foreach($dd as $va)
                    <h5><b>{{$va->heading}}</b></h5>
                    <p><a href="#" style="color:#ea0000; ">{{$va->decp}}</a></p><br>
                   @endforeach
                    </marquee>
                
              
              <!--<input type="text" placeholder="Your Name">
              <input type="email" placeholder="Your Email">
              <input type="tel" placeholder="Your Phone">
              <button type="submit" class="btn btn-filled">Get your free trial</button>-->
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Trial section end -->
    <!-- Categories sectiion start -->
    <section class="categories bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline">Top categories</span>
              <h3 class="sec-title">Pick the right category Build your career</h3>
            </div>
          </div>        
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="/courses" class="icon-list-block">
              <img src="images/icons/categories/4.png" alt="">              
              <span>IT & Software</span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="/corporate" class="icon-list-block">
              <img src="images/icons/categories/2.png" alt="">
              <span>Corporate Training</span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="/ieeeacademic" class="icon-list-block">
              <img src="images/icons/categories/3.png" alt="">
              <span>Academic Projects</span>
            </a>
          </div>
          <!--<div class="col-md-3 col-sm-6">
            <a href="courses4.html" class="icon-list-block">
              <img src="images/icons/categories/4.png" alt="">
              <span>Cloud Computing</span>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="course-details17.html" class="icon-list-block">
              <img src="images/icons/categories/5.png" alt="">
              <span>Digital Marketing</span>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="course-details19.html" class="icon-list-block">
              <img src="images/icons/categories/6.png" alt="">
              <span>Internet of Things</span>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="courses5 " class="icon-list-block">
              <img src="images/icons/categories/7.png" alt="">
              <span>Artifical Intelligence</span>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="courses6.html" class="icon-list-block">
              <img src="images/icons/categories/8.png" alt="">
              <span>IEEE Academic Projects</span>
            </a>
          </div>-->
        </div>
      </div>
    </section>
    <!-- Categories sectiion end -->
    
    <!-- Courses section start -->
    <section class="courses">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <h3 class="sec-title">What We Are</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="course-caro owl-carousel">
            @foreach($tt as $var)
            <div class="col-12">
              <div class="single-course">
                <figure class="course-thumb">
                  <a href="{{$var->image}}" class="lightbox-image" data-fancybox="gallery">
                  <img src="{{$var->image}}" alt="">
                  </a>
                </figure>
                <div class="course-content">
                  <h3><a href="course-details.html">{{$var->title}}</a></h3>
                  <p>{{$var->descp}}
                  </p>
                  
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Courses section end -->



   

    <!-- Funfacts start -->
    <section class="funfacts-02 bg-light">
      <div class="container">
        <ul>
          <li>
            <span>25</span>
            <p>Amazing Courses</p>
          </li>
          <li>
            <span>100%</span>
            <p>talented instructors</p>
          </li>
          <li>
            <span>98%</span>
            <p>Skilled Students</p>
          </li>
          <li>
            <span>11</span>
            <p>categories</p>
          </li>
        </ul>
      </div>
    </section>
    <!-- Funfacts end -->
     <!-- Courses section start -->
    <section class="courses">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <h3 class="sec-title">Popular Courses</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="course-caro owl-carousel">
            <div class="col-12">
              <div class="single-course">
              <figure class="course-thumb">
                <img src="images/course/vr_1.jpg" alt="">
                <strong class="ribbon">2 Months</strong>
              </figure>
              <div class="course-content">
                <h3><a href="course-details.html">Augmented Reality / Virtual Reality</a></h3>
                <p> Globally Augmented Reality and Virtual Reality Market was valued US$ 6.1 billion.
                </p>
                <div class="enroll">
                  <div class="ratings">
                    <span class="total-students"><i class="ti-user"></i> Students</span>
                    <a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a>
                    <span class="enrolled">(330)</span>
                  </div>
                  <div class="course-meta text-right">
                    <!-- <strong class="course-price">$29.00</strong> -->
                    <a href="/virtual_reality" class="btn btn-filled">Read More</a>
                  </div>                 
                </div>
              </div>
            </div>
            </div>
            <div class="col-12">
             <div class="single-course">
              <figure class="course-thumb">
                <img src="images/course/azure_3.jpg" alt="">
                <strong class="ribbon">3 months</strong>
              </figure>
              <div class="course-content">
                <h3><a href="course-details.html">Cloud Computing</a></h3>
                <p>Cloud computing, in turn, refers to sharing resources, software, and information via a network, in this case the Internet.
                </p>
                <div class="enroll">
                  <div class="ratings">
                    <span class="total-students"><i class="ti-user"></i> Students</span>
                    <a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a>
                    <span class="enrolled">(330)</span>
                  </div>
                  <div class="course-meta text-right">
                    <!-- <strong class="course-price">$29.00</strong> -->
                    <a href="/cloud_computing" class="btn btn-filled">Read More</a>
                  </div>                 
                </div>
              </div>
            </div>
            </div>
            <div class="col-12">
              <div class="single-course">
              <figure class="course-thumb">
                <img src="images/course/ai_1.jpg" alt="">
                <strong class="ribbon">3 months</strong>
              </figure>
              <div class="course-content">
                <h3><a href="course-details.html">Embedded System</a></h3>
                <p>An embedded system is a computer system with a dedicated function within a larger mechanical..
                </p>
                <div class="enroll">
                  <div class="ratings">
                    <span class="total-students"><i class="ti-user"></i> Students</span>
                    <a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a>
                    <span class="enrolled">(330)</span>
                  </div>
                  <div class="course-meta text-right">
                    <!-- <strong class="course-price">$29.00</strong> -->
                    <a href="/embedded_systems" class="btn btn-filled">Read More</a>
                  </div>                 
                </div>
              </div>
            </div>
            </div>
            <div class="col-12">
              <div class="single-course">
              <figure class="course-thumb">
                <img src="images/course/hacking_3.jpeg" alt="">
                <strong class="ribbon">3 months</strong>
              </figure>
              <div class="course-content">
                <h3><a href="course-details.html">Ethical Hacking</a></h3>
                <p>Ethical hacking refers to the act of locating weaknesses and vulnerabilities of computer and information systems.
                </p>
                <div class="enroll">
                  <div class="ratings">
                    <span class="total-students"><i class="ti-user"></i> Students</span>
                    <a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a><a href="#"><i class="ti-star"></i>
                    </a>
                    <span class="enrolled">(330)</span>
                  </div>
                  <div class="course-meta text-right">
                    <!-- <strong class="course-price">$29.00</strong> -->
                    <a href="/ethical" class="btn btn-filled">Read More</a>
                  </div>                 
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Courses section end -->
     <!-- Certification section start -->
    <section class="certification">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <h3 class="sec-title">Our Certifications</h3>
            </div>
          </div>
        </div>
        <div class="partners-caro owl-carousel">
          <a href="#"><img src="images/partners/5.png" alt=""></a>
          <a href="#"><img src="images/partners/1.png" alt=""></a>
          <a href="#"><img src="images/partners/5.png" alt=""></a>
          <a href="#"><img src="images/partners/3.png" alt=""></a>
          <a href="#"><img src="images/partners/5.png" alt=""></a>
        </div>
      </div>
    </section>
    <!-- Certification section end -->
    <!-- Blog section start -->
    <!--<section class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline">What’s new</span>
              <h3 class="sec-title">Every Single Update From <br>Our Blog Page</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="post-item">
              <img src="images/post/1.jpg" alt="">
              <div class="post-content">
                <div class="meta-tags">
                  <a href="#" class="post-meta category">creative
                  </a> | <a href="#" class="post-meta date">07 July, 2019</a>
                </div>
                <h3 class="post-title"><a href="#">Own may face grass dot
                    subdue brought</a></h3>
                <div class="meta-tags">
                  <a href="#" class="post-meta category"><i class="ti-package"></i>Women Fashion</a><a href="#" class="post-meta commentCount"><i class="ti-comments"></i>2 Comments</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="post-item">
              <img src="images/post/2.jpg" alt="">
              <div class="post-content">
                <div class="meta-tags">
                  <a href="#" class="post-meta category">technology
                  </a> | <a href="#" class="post-meta date">07 June, 2019</a>
                </div>
                <h3 class="post-title"><a href="#">Dolores quis commodi ratione fugit optio</a></h3>
                <div class="meta-tags">
                  <a href="#" class="post-meta category"><i class="ti-package"></i>creative</a><a href="#" class="post-meta commentCount"><i class="ti-comments"></i>2 Comments</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="post-item">
              <img src="images/post/3.jpg" alt="">
              <div class="post-content">
                <div class="meta-tags">
                  <a href="#" class="post-meta category">Marketing
                  </a> | <a href="#" class="post-meta date">13 Feb, 2019</a>
                </div>
                <h3 class="post-title"><a href="#">Repellat delectus maiores accusantium</a></h3>
                <div class="meta-tags">
                  <a href="#" class="post-meta category"><i class="ti-package"></i>Women Fashion</a>
                  <a href="#" class="post-meta commentCount"><i class="ti-comments"></i>2 Comments</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- Blog section end -->

    <!-- Testimonial section start -->
    <section class="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline text-white">Testimonials</span>
              <h3 class="sec-title text-white">What Our Users Say About Us</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-md-12 m-auto">
            <div class="testimonialBox">
              <span class="quote-sign"><i class="ti-quote-left"></i></span>
              <div class="test-caro owl-carousel" data-slider-id="1">
                <div class="single-testimonial">                  
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="testimonial-user">
                    <img src="images/avatar-small.png" class="avatar-small circle" alt="">
                    <strong>Sansa Stark</strong>
                  </div>
                </div>
                <div class="single-testimonial">
                  <p>Ypsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="testimonial-user">
                    <img src="images/avatar-small.png" class="avatar-small circle" alt="">
                    <strong>Linda heiday</strong>
                  </div>
                </div>
                <div class="single-testimonial">
                  <p>Qonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="testimonial-user">
                    <img src="images/avatar-small.png" class="avatar-small circle" alt="">
                    <strong>Anna Gunn</strong>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial section end -->  

    @include('footer')

    <!-- JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.fancybox.js"></script>
  </body>
</html>