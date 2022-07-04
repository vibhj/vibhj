<?php

  echo "


<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <meta http-equiv='x-ua-compatible' content='ie=edge' />
    <title>A2z Tutor</title>
    <meta name='description' content='' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel='stylesheet' href='assets/css/bootstrap.css' />
    <link rel='stylesheet' href='assets/css/LineIcons.2.0.css'/>
    <link rel='stylesheet' href='assets/css/tiny-slider.css'/>
    <link rel='stylesheet' href='assets/css/animate.css'/>
    <link rel='stylesheet' href='assets/css/lindy-uikit.css'/>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <script src='https://kit.fontawesome.com/8c2dd52184.js' crossorigin='anonymous'></script>

    <script src='https://code.jquery.com/jquery-2.2.0.min.js' type='text/javascript'></script>
    
        <link rel='stylesheet' type='text/css' href='assets/css/index.css'>
  </head>
  <body>

   
  
    <!-- ========================= preloader start ========================= -->
    <div class='preloader'>
      <div class='loader'>
        <div class='spinner'>
          <div class='spinner-container'>
            <div class='spinner-rotator'>
              <div class='spinner-left'>
                <div class='spinner-circle'></div>
              </div>
              <div class='spinner-right'>
                <div class='spinner-circle'></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================= preloader end ========================= -->


    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section class='hero-section-wrapper-5'>

      <!-- ========================= header-6 start ========================= -->
      <header class='header header-6 shadow'>
        <div class='navbar-area'>
          <div class='container'>
            <div class='row align-items-center'>
              <div class='col-lg-12'>
                <nav class='navbar navbar-expand-lg' id='navbar'>
                  <a class='navbar-brand' href='index.php'>
                    <img src='assets/img/logo/logo.png' alt='Logo' />
                  </a>
                  <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent6' aria-controls='navbarSupportedContent6' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='toggler-icon'></span>
                    <span class='toggler-icon'></span>
                    <span class='toggler-icon'></span>
                  </button>
  
                  <div class='collapse navbar-collapse sub-menu-bar' id='navbarSupportedContent6'>
                    <ul id='nav6' class='navbar-nav ms-auto'>
                      <li class='nav-item'>
                        <a class='nav-link active' href='about.php'>About</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='signup.php'>Signup</a>
                      </li>                      
                      <li class='nav-item'>
                        <a class='nav-link' href='login.php'>Login</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='contact.php'>Contact</a>
                      </li>
                    </ul>
                  </div>
                  
                  <!-- navbar collapse -->
                </nav>
                <!-- navbar -->
              </div>
            </div>
            <!-- row -->
          </div>
          <!-- container -->
        </div>
        <!-- navbar area -->
      </header>

      <script type='text/javascript'>
        $( '#navbar .nav-item a' ).on( 'click', function () {
  $( '#navbar .nav-item a' ).find( '#navbar .nav-item a.active' ).removeClass( 'active' );
  $( this ).parent( '#navbar .nav-item a' ).addClass( 'active' );
});
      </script>





      
      <!-- ========================= header-6 end ========================= -->

    </section>
    <!-- ========================= hero-section-wrapper-6 end ========================= -->

    <!-- ========================= feature style-5 start about A2zTutor ========================= -->
    <section id='feature' class='feature-section feature-style-5' style='background-color:#F3F3F3;' >
      <div class='container' style='margin-top:180px;'>
        <div class='row justify-content-center'>
          <div class='col-md-10'>
            <div class='section-title text-center mb-60'>
              <h2 class='mb-40 wow fadeInUp' data-wow-delay='.2s'>About <span style='color: blue;'>A2zTutor</span></h2>
              <p class='wow fadeInUp' data-wow-delay='.4s' style='font-size: 20px;line-height: 35px; margin-bottom: 120px;'>Education plays a key role in  the development of any individual. Right education shapes the future and act as a foundation stone of a career well led. Realising the importance of quality education, we aim to put together a team of highly qualified tutors that  provide one to one lessons to the students in the most efficient way. If learning is a lock, Clarity is the key. We provide home to home quality education with utmost clarity.Our team is skilled enough to be a right mentor for the students ranging from class 1 to 12 in varied subjects.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= feature style-5 end about A2zTutor ========================= -->

    <!-- ========================= about style-4 start student ========================= -->
    <section id='about' class='about-section about-style-4' style='background-color: white;'>
      <div class='container'>
        <div class='row align-items-center'>
          <div class='col-xl-5 col-lg-6'>
            <div class='about-content-wrapper'>
              <div class='section-title mb-30'>
                <h2 class='mb-25 wow fadeInUp' data-wow-delay='.2s'>Get a tutor</h2>
                <h4 class='wow fadeInUp' style='font-weight: 400;color: #242481;line-height: 50px;' data-wow-delay='.3s'>Getting a tutor is just a click away. Click on this link and venture into the world of tutors. Browse among some of the brilliant teachers in almost any subject.</h4>
              </div>
              
              <a href='login.php' class='button button-lg radius-50 wow fadeInUp' data-wow-delay='.6s' onclick='myFunction();'>Get Started <i class='lni lni-chevron-right'></i> </a>
            </div>
          </div>
          <div class='col-xl-7 col-lg-6'>
            <div class='about-image text-lg-right wow fadeInUp' data-wow-delay='.5s'>
              <img src='assets/img/about/about_1.png' alt=''>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= about style-4 end student========================= -->

    <!-- ========================= about style-4 start tutor========================= -->
    <section id='about' class='about-section about-style-4' style='background-color: white;'>
        <div class='container'>
          <div class='row align-items-center'>
            <div class='col-xl-7 col-lg-6'>
                <div class='about-image text-lg-right wow fadeInUp' data-wow-delay='.5s'>
                <img src='assets/img/about/about_2.png' alt=''>
                </div>
            </div>
            <div class='col-xl-5 col-lg-6'>
              <div class='about-content-wrapper'>
                <div class='section-title mb-30'>
                  <h2 class='mb-25 wow fadeInUp' style='letter-spacing:3px;' data-wow-delay='.2s'>Get on board with us</h2>
                  <h4 class='wow fadeInUp' style='font-weight: 400;color: #242481;line-height: 50px;' data-wow-delay='.3s'>If you think you have it in yourself the enigma of being a excellent teacher you can register with us as a tutor in any of the varied subjects</h4>
                  <i><small style='color: blue;'>If your experience can shape the young minds feel free to join us.</small></i>
                </div>
                
                <a href='login.php' class='button button-lg radius-50 wow fadeInUp' data-wow-delay='.6s' onclick='myFunction();'>Get Started <i class='lni lni-chevron-right'></i> </a>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!-- ========================= about style-4 end tutor ========================= -->


      <!-- ========================= feature style-5 start requirement ========================= -->
      <section id='feature' class='feature-section feature-style-5' style='background-color:#ebf4ff;' >
        <div class='container' style='margin-top:180px;'>
          <div class='row justify-content-center'>
            <div class='col-md-10'>
              <div class='section-title text-center mb-60'>
                <h2 class='mb-40 wow fadeInUp' data-wow-delay='.2s'>Why are <span style='color: blue;'>Tutors</span> needed?</h2>
                <p class='wow fadeInUp' data-wow-delay='.4s' style='font-size: 20px;line-height: 35px; margin-bottom: 120px;'>Each one of us is designed differently, grasp differently thus perform differently.
                    A2z tutors are the coolest escape from the  monotonous and deeply scattered  school teaching system.
                    One on one teaching will help students to grasp things with ease and no peer pressure.
                    Each student will be able to get full attention and academic care which schools fail to provide.
                    We along with our wonderful team focus on bringing out best from each student in their personal capacity without bogus competition.
                    Basics will be dealt with utmost care and root level concept clarity will be achieved.
                    </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ========================= feature style-5 end requirement ========================= -->

    <!-- ========================= team style-4 start ========================= -->
    <div class='container' id='team'>
    <div class='row'>
      <div class='col-sm-6 offset-sm-3 mt-4 mb-4'>
        <h2 class='text-center'>The Team</h2>
        
      </div>
    </div>

    <div class='row'>
      <div class='col-md-3'>
        <div class='card-box text-center'>
          <div class='user-pic'>
            <img src='assets/img/about/Manisha.jpeg' class='img-fluid' alt='User Pic'>
          </div>
          <h4>Manisha Joshi</h4>
          <h6>Web Designer</h6>
          <hr>
          <p>I am an undergraduate of B.Tech, currently pursuing a major in Information Technology from ABES Engineering College, Ghaziabad, India. I like solving problems based on Data Structures, Algorithms.</p>
          <hr>
          <a href='#' class='btn btn-primary'>Know More</a>
        </div>
      </div>

      <div class='col-md-3'>
        <div class='card-box text-center'>
          <div class='user-pic'>
            <img src='assets/img/about/Vibhanshu.png' class='img-fluid' alt='User Pic'>
          </div>
          <h4>Vibhanshu Jaiswal</h4>
          <h6>Full Stack Web Developer</h6>
          <hr>
          <p>I am a fourth-year undergraduate and currently pursuing a major in Information Technology Engineering from ABES Engineering College, Ghaziabad, India. I have a problem-solving mindset.</p>
          <hr>
          <a href='https://vibhj.github.io/vibhanshuj9/index.html' class='btn btn-primary'>Know More</a>
        </div>
      </div>

      <div class='col-md-3'>
        <div class='card-box text-center'>
          <div class='user-pic'>
            <img src='assets/img/about/Nishant.jpeg' class='img-fluid' alt='User Pic'>
          </div>
          <h4>Nishant Singh</h4>
          <h6>Backend Developer</h6>
          <hr>
          <p>A highly innovative indiviual with a keen interest in new technologies and developing creative solutions as well as passionate about building designs and advance constructive ideas and solutions.</p>
          <hr>
          <a href='#' class='btn btn-primary'>Know More</a>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='card-box text-center'>
          <div class='user-pic'>
            <img src='assets/img/about/Pranav.jpeg' class='img-fluid' alt='User Pic'>
          </div>
          <h4>Pranav Sharma</h4>
          <h6>Front End Developer</h6>
          <hr>
          <p>I am a fourth-year undergraduate and currently pursuing a major in Information Technology Engineering from ABES Engineering College, Ghaziabad, India. I have a problem-solving mindset.</p>
          <hr>
          <a href='#' class='btn btn-primary'>Know More</a>
        </div>
      </div>
    
  </div>
</div>

    <!-- ========================= team style-4 end ========================= -->
    <!-- ========================= feature style-5 start feedback ========================= -->
    <section id='feature' class='feature-section feature-style-5' style='background-color:#B1D0E0;' >
        <div class='container' >
          <div class='row'>
            <div class='col'>
              <div class='section-title' style='margin-bottom: 40px;'>
                <i><h3 class='wow fadeInUp' data-wow-delay='.2s' style='color: rgba(0, 0, 255, 0.384); margin-bottom: 20px;'>Feedback</h3></i>
                <i><p style='color: whitesmoke;'>
                    We invite you all to offer their honest and valuable feedback and response to our functioning. All the valid suggestions  would be welcomed with open hands. You can rate us as well. We thrive to keep on improving along with the students. This tutor - learner partnership will be a game changer.
                </p></i>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- ========================= feature style-5 end feedback ========================= -->

    <footer class='footer footer-style-4'>
      <div class='container'>
        <div class='widget-wrapper'>
          <div class='row'>
            <div class='col-xl-4 col-lg-4 col-md-6'>
              <div class='footer-widget wow fadeInUp' data-wow-delay='.2s'>
                <div class='logo'>
                  <a href='#0'> <img src='assets/img/logo/logo.svg' alt=''> </a>
                </div>
                <p class='desc'>ABES Engineering College, Lal Kuan, Ghaziabad, U.P.(201009)</p>
                <ul class='socials'>
                  <li> <a href='#0'> <i class='lni lni-facebook-filled'></i> </a> </li>
                  <li> <a href='#0'> <i class='lni lni-twitter-filled'></i> </a> </li>
                  <li> <a href='#0'> <i class='lni lni-instagram-filled'></i> </a> </li>
                  <li> <a href='#0'> <i class='lni lni-linkedin-original'></i> </a> </li>
                </ul>
              </div>
            </div>
            <div class='col-xl-4 offset-xl-1 col-lg-2 col-md-6 col-sm-6'>
              <div class='footer-widget wow fadeInUp' data-wow-delay='.3s'>
                <h6>Quick Link</h6>
                <ul class='links'>
                  <li> <a href='#0'>Home</a> </li>
                  <li> <a href='#0'>About</a> </li>
                  <li> <a href='#0'>Service</a> </li>
                  <li> <a href='#0'>Testimonial</a> </li>
                  <li> <a href='#0'>Contact</a> </li>
                </ul>
              </div>
            </div>
            <div class='col-xl-3 col-lg-3 col-md-6 col-sm-6'>
              <div class='footer-widget wow fadeInUp' data-wow-delay='.4s'>
                <h6>Services</h6>
                <ul class='links'>
                  <li> <a href='#0'>Web Design</a> </li>
                  <li> <a href='#0'>Web Development</a> </li>
                  <li> <a href='#0'>Seo Optimization</a> </li>
                  <li> <a href='#0'>Blog Writing</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class='copyright-wrapper wow fadeInUp' data-wow-delay='.2s'>
          <p>Design and Developed by <a href='#' rel='nofollow' target='_blank'>A2z Tutor</a></p>
        </div>
      </div>
    </footer>
    <!-- ========================= footer style-4 end ========================= -->
    
    <!-- ========================= scroll-top start ========================= -->
    <a href='#' class='scroll-top'> <i class='lni lni-chevron-up'></i> </a>
    <!-- ========================= scroll-top end ========================= -->
		
    
    <!-- ========================= JS here ========================= -->
    <script src='assets/js/bootstrap.js'></script>
    <script src='assets/js/tiny-slider.js'></script>
    <script src='assets/js/wow.min.js'></script>
    <script src='assets/js/main.js'></script>



    

    <script>
      function myFunction() {
        alert('You have to login first....');
        window.location.href='login.php';
      }
    </script>

  </body>
</html>

";
?>