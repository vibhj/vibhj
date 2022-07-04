<!DOCTYPE html>
<html lang='en'>

  <head>
    <?php include('links.php'); ?>
    
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  </head>

  <body>

	<?php include('preloader.php'); ?>


	<!-- ========================= navbar start ========================= -->
      <header class='header header-6 shadow'>
        <div class='navbar-area'>
          <div class='container'>
            <div class='row align-items-center'>
              <div class='col-lg-12'>
                <nav class='navbar navbar-expand-lg' id="navbar">
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
                        <a class='nav-link active' href='login.php'>Login</a>
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



  <!-- ================ login ============================== -->


<div class="form-bg">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                <div class="form-container">
                    <div class="form-icon">
                        <i class="fas fa-user-circle" aria-hidden="true"></i>
                        <span class="signup"><a href="signup.php">Don't have account? Signup</a></span>
                    </div>
                    <form class="form-horizontal" method="POST" action="connect.php">
                        <h3 class="title">Login</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" placeholder="Password" name="password" required>
                        </div>
                        <input type="submit" class="btn signin" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



	<?php include('footer.php'); ?>

	 <!-- ========================= scroll-top start ========================= -->
    <a href='#' class='scroll-top'> <i class='lni lni-chevron-up'></i> </a>
    <!-- ========================= scroll-top end ========================= -->

	<?php include('script.php'); ?>



  </body>	

</html>  
