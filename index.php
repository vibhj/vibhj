
<!DOCTYPE html>
<html lang='en'>
  <head>
    <?php include('links.php'); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  </head>
  <body>

   
  <?php include('preloader.php'); ?>

    <!-- ========================= geolocation start ========================= -->

    <p id='geo' onLoad='' style="display: none;">Your coordinates:</p>

    <script type="text/javascript">
          var x=document.getElementById("geo");
        function getLocation()
         {
        if (navigator.geolocation)
        {
        navigator.geolocation.getCurrentPosition(showPosition);
        }
        else{x.innerHTML="Geolocation is not supported by this browser.";}
        }
        function showPosition(position)
        {
        x.innerHTML="Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;  
        }
        getLocation()
    </script>

    <!-- ========================= geolocation end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section class='hero-section-wrapper-5'>

      <?php include('navbar.php'); ?>

      
      <!-- ========================= header-6 end ========================= -->

      <!-- ========================= hero-5 start ========================= -->
      <div class='hero-section hero-style-5 img-bg' style='background-image: url(assets/img/hero/hero-5/hero-bg.svg)'>
        <div class='container'>
          <div class='row'>
            <div class='col-lg-6'>
              <div class='hero-content-wrapper'>
                <h2 class='mb-30 wow fadeInUp' data-wow-delay='.2s'>Search the Tutor <br> Nearby</h2>
                <p class='mb-30 wow fadeInUp' data-wow-delay='.4s'>Browse and search among one of the best qualified tutors with the amenity of geographical filteration with just one click. A click to your future.</p>
                <a href='login.php' class='button button-lg radius-50 wow fadeInUp' data-wow-delay='.6s' onclick="myFunction();">Get Started <i class='lni lni-chevron-right'></i> </a>
              </div>
            </div>
            <div class='col-lg-6 align-self-end'>
              <div class='hero-image wow fadeInUp' data-wow-delay='.5s'>
                <img src='assets/img/hero/hero-5/hero-img.svg' alt=''>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ========================= hero-5 end ========================= -->

    </section>
    <!-- ========================= hero-section-wrapper-6 end ========================= -->

    <!-- ========================= feature style-5 start ========================= -->
    <section id='feature' class='feature-section feature-style-5'>
      <div class='container'>
        <div class='row justify-content-center'>
          <div class='col-xxl-5 col-xl-5 col-lg-7 col-md-8'>
            <div class='section-title text-center mb-60'>
              <h3 class='mb-15 wow fadeInUp' data-wow-delay='.2s'>Specializing In</h3>
              <p class='wow fadeInUp' data-wow-delay='.4s'>We provide proficient tutors for almost all the subjects from class Ist to XIIth. Special Focus on Physics, Chemistry, Maths for Board students. Special doubt sessions and timely tests for concept clarity.</p>
            </div>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-4 col-md-6'>
            <div class='single-feature wow fadeInUp' data-wow-delay='.2s'>
              <div class='icon'>
                <i class='lni lni-vector'></i>
                <svg width='110' height='72' viewBox='0 0 110 72' fill='none' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z' fill='#EBF4FF'/>
                  </svg>                  
              </div>
              <div class='content'>
                <h5>Physics</h5>
                <p>Coming soon...</p>
              </div>
            </div>
          </div>
          <div class='col-lg-4 col-md-6'>
            <div class='single-feature wow fadeInUp' data-wow-delay='.4s'>
              <div class='icon'>
                <i class='lni lni-pallet'></i>
                <svg width='110' height='72' viewBox='0 0 110 72' fill='none' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z' fill='#EBF4FF'/>
                  </svg> 
              </div>
              <div class='content'>
                <h5>Chemistry</h5>
                <p>Coming soon...</p>
              </div>
            </div>
          </div>
          <div class='col-lg-4 col-md-6'>
            <div class='single-feature wow fadeInUp' data-wow-delay='.6s'>
              <div class='icon'>
                <i class='lni lni-stats-up'></i>
                <svg width='110' height='72' viewBox='0 0 110 72' fill='none' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z' fill='#EBF4FF'/>
                  </svg> 
              </div>
              <div class='content'>
                <h5>Mathematics</h5>
                <p>Coming soon...</p>
              </div>
            </div>
          </div>
          <div class='col-lg-4 col-md-6'>
            <div class='single-feature wow fadeInUp' data-wow-delay='.2s'>
              <div class='icon'>
                <i class='lni lni-code-alt'></i>
                <svg width='110' height='72' viewBox='0 0 110 72' fill='none' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z' fill='#EBF4FF'/>
                  </svg> 
              </div>
              <div class='content'>
                <h5>Arts</h5>
                <p>Coming soon...</p>
              </div>
            </div>
          </div>
          <div class='col-lg-4 col-md-6'>
            <div class='single-feature wow fadeInUp' data-wow-delay='.4s'>
              <div class='icon'>
                <i class='lni lni-lock'></i>
                <svg width='110' height='72' viewBox='0 0 110 72' fill='none' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z' fill='#EBF4FF'/>
                  </svg> 
              </div>
              <div class='content'>
                <h5>Language</h5>
                <p>Coming soon...</p>
              </div>
            </div>
          </div>
          <div class='col-lg-4 col-md-6'>
            <div class='single-feature wow fadeInUp' data-wow-delay='.6s'>
              <div class='icon'>
                <i class='lni lni-code'></i>
                <svg width='110' height='72' viewBox='0 0 110 72' fill='none' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z' fill='#EBF4FF'/>
                  </svg> 
              </div>
              <div class='content'>
                <h5>Sport academics</h5>
                <p>Coming soon...</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ========================= feature style-5 end ========================= -->

    <!-- ========================= about style-4 start ========================= -->
    <section id='about' class='about-section about-style-4'>
      <div class='container'>
        <div class='row align-items-center'>
          <div class='col-xl-5 col-lg-6'>
            <div class='about-content-wrapper'>
              <div class='section-title mb-30'>
                <h3 class='mb-25 wow fadeInUp' data-wow-delay='.2s'>About Us</h3>
                <p class='wow fadeInUp' data-wow-delay='.3s'>We deliver quality education to homes with great efficiency. Take a trial class now and enter the world of amazing possibilities.</p>
              </div>
              <ul>
                <li class='wow fadeInUp' data-wow-delay='.35s'>
                  <i class='lni lni-checkmark-circle'></i>
                  We shape your skills with some of the best qualified tutors.
                </li>
                <li class='wow fadeInUp' data-wow-delay='.4s'>
                  <i class='lni lni-checkmark-circle'></i>
                  We give your talent an opportunity to flourish.
                </li>
                <li class='wow fadeInUp' data-wow-delay='.45s'>
                  <i class='lni lni-checkmark-circle'></i>
                  We provide One on one communication and geographical filteration in minimal costs.
                </li>
              </ul>
              <a href='about.php' class='button button-lg radius-10 wow fadeInUp' data-wow-delay='.5s'>Learn More</a>
            </div>
          </div>
          <div class='col-xl-7 col-lg-6'>
            <div class='about-image text-lg-right wow fadeInUp' data-wow-delay='.5s'>
              <img src='assets/img/about/about-4/about-img.svg' alt=''>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= about style-4 end ========================= -->

    <!-- ========================= team style-4 start ========================= -->
    <div class="container" id="team">
    <div class="row">
      <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
        <h2 class="text-center">The Team</h2>
        
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="card-box text-center">
          <div class="user-pic">
            <img src="assets/img/about/Manisha.jpeg" class="img-fluid" alt="User Pic">
          </div>
          <h4>Manisha Joshi</h4>
          <h6>Web Designer</h6>
          <hr>
          <p>I am an undergraduate of B.Tech, currently pursuing a major in Information Technology from ABES Engineering College, Ghaziabad, India. I like solving problems based on Data Structures, Algorithms.</p>
          <hr>
          <a href="#" class="btn btn-primary">Know More</a>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-box text-center">
          <div class="user-pic">
            <img src="assets/img/about/Vibhanshu.png" class="img-fluid" alt="User Pic">
          </div>
          <h4>Vibhanshu Jaiswal</h4>
          <h6>Full Stack Web Developer</h6>
          <hr>
          <p>I am a fourth-year undergraduate and currently pursuing a major in Information Technology Engineering from ABES Engineering College, Ghaziabad, India. I have a problem-solving mindset. </p>
          <hr>
          <a href="https://vibhj.github.io/vibhanshuj9/index.html" class="btn btn-primary">Know More</a>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-box text-center">
          <div class="user-pic">
            <img src="assets/img/about/Nishant.jpeg" class="img-fluid" alt="User Pic">
          </div>
          <h4>Nishant Singh</h4>
          <h6>Backend Developer</h6>
          <hr>
          <p>A highly innovative indiviual with a keen interest in new technologies and developing creative solutions as well as passionate about building designs and advance constructive ideas and solutions.</p>
          <hr>
          <a href="#" class="btn btn-primary">Know More</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-box text-center">
          <div class="user-pic">
            <img src="assets/img/about/Pranav.jpeg" class="img-fluid" alt="User Pic">
          </div>
          <h4>Pranav Sharma</h4>
          <h6>Front End Developer</h6>
          <hr>
          <p>I am a fourth-year undergraduate and currently pursuing a major in Information Technology Engineering from ABES Engineering College, Ghaziabad, India. I have a problem-solving mindset.</p>
          <hr>
          <a href="#" class="btn btn-primary">Know More</a>
        </div>
      </div>
    
  </div>
</div>

    <!-- ========================= team style-4 end ========================= -->

    <!-- ========================= contact-style-3 start ========================= -->
    <section id='contact' class='contact-section contact-style-3'>
      <div class='container'>
        <div class='row justify-content-center'>
          <div class='col-xxl-5 col-xl-5 col-lg-7 col-md-10'>
            <div class='section-title text-center mb-50'>
              <h3 class='mb-15'>Get in touch</h3>
              <p></p>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-lg-8'>
            <div class='contact-form-wrapper'>
              <form action='contact_form.php' method='POST'>
                <div class='row'>
                  <div class='col-md-6'>
                    <div class='single-input'>
                      <input type='text' id='name' name='name' class='form-input' placeholder='Name' required>
                      <i class='lni lni-user'></i>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='single-input'>
                      <input type='email' id='email' name='email' class='form-input' placeholder='Email' required>
                      <i class='lni lni-envelope'></i>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='single-input'>
                      <input type='text' id='number' name='number' class='form-input' placeholder='Number' maxlength='10' required>
                      <i class='lni lni-phone'></i>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='single-input'>
                      <input type='text' id='subject' name='subject' class='form-input' placeholder='Subject' required>
                      <i class='lni lni-text-format'></i>
                    </div>
                  </div>
                  <div class='col-md-12'>
                    <div class='single-input'>
                      <textarea name='message' id='message' class='form-input' placeholder='Message' rows='6' required></textarea>
                      <i class='lni lni-comments-alt'></i>
                    </div>
                  </div>
                  <div class='col-md-12'>
                    <div class='form-button'>
                      <button type='submit' class='button'> <i class='lni lni-telegram-original'></i> Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

          </div>

          <div class='col-lg-4'>
            <div class='left-wrapper'>
              <div class='row'>
                <div class='col-lg-12 col-md-6'>
                  <div class='single-item'>
                    <div class='icon'>
                      <i class='lni lni-phone'></i>
                    </div>
                    <div class='text'>
                      <p>+91 7777777777</p>
                      <p>+91 9999999999</p>
                    </div>
                  </div>
                </div>
                <div class='col-lg-12 col-md-6'>
                  <div class='single-item'>
                    <div class='icon'>
                      <i class='lni lni-envelope'></i>
                    </div>
                    <div class='text'>
                      <p>customersupport@a2ztutor.in</p>
                    </div>
                  </div>
                </div>
                <div class='col-lg-12 col-md-6'>
                  <div class='single-item'>
                    <div class='icon'>
                      <i class='lni lni-map-marker'></i>
                    </div>
                    <div class='text'>
                      <p>ABES Engineering College, Lal Kuan, Ghaziabad, U.P.(201009)</p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= contact-style-3 end ========================= -->


    <!-- ========================= footer style-4 start ========================= -->

    <?php include('footer.php'); ?>
    
    <!-- ========================= scroll-top start ========================= -->
    <a href='#' class='scroll-top'> <i class='lni lni-chevron-up'></i> </a>
    <!-- ========================= scroll-top end ========================= -->
		
    <?php include('script.php'); ?>


    

    <script>
      function myFunction() {
        alert("You have to login first....");
        window.location.href='login.php';
      }
    </script>

  </body>
</html>

