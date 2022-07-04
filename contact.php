
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
                        <a class='nav-link' href='about.php'>About</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='signup.php'>Signup</a>
                      </li>                      
                      <li class='nav-item'>
                        <a class='nav-link' href='login.php'>Login</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link active' href='contact.php'>Contact</a>
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

    <!-- ========================= contact-style-3 start ========================= -->
    <section id='contact' class='contact-section contact-style-3'>
      <div class='container' style='padding-top: 7%;'>
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

    <!-- ========================= map start ========================= -->

    <div class='card' style='margin-top: 2%;'>
      <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.8889002703604!2d77.44376021489342!3d28.633091682417664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee22c60837b7%3A0x7c35343eceb7bde0!2sABES%20Engineering%20College!5e0!3m2!1sen!2sin!4v1647608701497!5m2!1sen!2sin' width='100%' height='450' style='border:1;' allowfullscreen="" loading="lazy"></iframe>
    </div>




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

