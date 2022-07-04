<!DOCTYPE html>
<html lang='en'>

  <head>
    <?php include('links.php'); ?>
    
    <link rel="stylesheet" type="text/css" href="assets/css/signup.css">
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
                        <a class='nav-link active' href='signup.php'>Signup</a>
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



  <!-- ================ signup ============================== -->



  <section class="forms-section">
  <h1 class="section-title">Register As</h1>

  <div class="forms">

    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Teacher
        <span class="underline"></span>
      </button>
      <form class="form form-login" method="POST" action="teacher_regis.php" enctype="multipart/form-data">
        <fieldset>
          <div class="input-block">
            <label>First Name</label>
            <input type="text" name="first_name" required>
          </div>
          <div class="input-block">
            <label>Last Name</label>
            <input type="text" name="last_name" required>
          </div>
          <div class="input-block">
            <label>Email</label>
            <input type="email" name="email" required>
          </div>
          <div class="input-block">
            <label>Gender</label>
          </div>  
            <div id="radio">
              <input type="radio" class="form-check-input" name="gender" value="Male">
              <label>Male</label>

              <input type="radio" class="form-check-input" name="gender" value="Female">
              <label>Female</label>

              <input type="radio" class="form-check-input" name="gender" value="Others">
              <label>Others</label>
            </div>
            <br>
          <div class="input-block">
            <label>Phone no. (Whatsapp no.)</label>
            <input type="tel" name="number" maxlength="10" minlength="10" required>
          </div>
          <div class="input-block">
            <label>Address</label>
            <input type="text" name="address" required>
          </div>
          <div class="input-block">
            <label>City</label>
            <input type="text" name="city" required>
          </div>
          <div class="input-block">
            <label>State</label>
              <select name="state" required class="form-select">
                <option selected>Choose...</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
              </select>
          </div>
          <div class="input-block">
            <label>Pincode</label>
            <input type="text" name="pincode" maxlength="6" required minlength="6">
          </div>
          <div class="input-block">
            <label>10th Percentage</label>
            <input type="text" name="10_per" required>
          </div>
          <div class="input-block">
            <label>12th Percentage</label>
            <input type="text" name="12_per" required>
          </div>
          <div class="input-block">
            <label>Highest Qualification Degree</label>
            <input type="text" name="degree" required>
          </div>
          <div class="input-block">
            <label>Highest Qualification Percentage</label>
            <input type="text" name="highest_per" required>
          </div>
          <div class="input-block">
            <label>Subject Preferred</label>
            <input type="text" name="subject" required>
          </div>
          <div class="input-block">
            <label>Teaching Experience (in years)</label>
            <input type="text" name="teach_experience" required>
          </div>
          <div class="input-block">
            <label>No. of Trial Days you want to give</label>
            <input type="text" name="trial_days" required>
          </div>
          <div class="input-block">
            <label>Link of google drive (all documents should be uploaded on it)</label>
            <input type="text" name="link" required>
          </div>
          <div class="input-block">
            <label>Upload your photo</label>
          </div>  
            <input type="file" class="form-control" name="photo" accept=".jpg,.jpeg" required>
            <label>Accept (.jpeg/.jpg) file only</label>
            <br>
            <br>
          <div class="input-block">
            <label>Upload your resume</label>
          </div> 
            <input type="file" class="form-control" name="resume" accept=".pdf,.doc" required>
             <label>Accept (.pdf/.docs) file only</label>
            <br>
            <br>
          <div class="input-block">
            <label>Password</label>
            <input type="password" name="password" required minlength="8">
          </div>  
            <input type="checkbox" class="form-check-input" name="condition" value="accepted" required>
              <label>I accept that all the entries are verified by me.</label>
        </fieldset>
        <input type="submit" class="btn-login" value="Register Now">
      </form>
    </div>




    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Student/Parent
        <span class="underline"></span>
      </button>

      <form class="form form-signup" method="POST" action="student_parent_regis.php" enctype="multipart/form-data">
        <fieldset>
          <div class="input-block">
            <label>First Name</label>
            <input type="text" name="first_name" required>
          </div>
          <div class="input-block">
            <label>Last Name</label>
            <input type="text" name="last_name" required>
          </div>
          <div class="input-block">
            <label>Email</label>
            <input type="email" name="email" required>
          </div>
          <div class="input-block">
            <label>Gender</label>
          </div>  
            <div id="radio">
              <input type="radio" class="form-check-input" name="gender" value="Male">
              <label>Male</label>

              <input type="radio" class="form-check-input" name="gender" value="Female">
              <label>Female</label>

              <input type="radio" class="form-check-input" name="gender" value="Others">
              <label>Others</label>
            </div>
            <br>
          <div class="input-block">
            <label>Phone no. (Whatsapp no.)</label>
            <input type="tel" name="number" required maxlength="10" minlength="10">
          </div>
          <div class="input-block">
            <label>Address</label>
            <input type="text" name="address" required>
          </div>
          <div class="input-block">
            <label>City</label>
            <input type="text" name="city" required>
          </div>
          <div class="input-block">
            <label>State</label>
              <select name="state" required class="form-select">
                <option selected>Choose...</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
              </select>
          </div>
          <div class="input-block">
            <label>Pincode</label>
            <input type="text" name="pincode" required maxlength="6">
          </div>
          <div class="input-block">
            <label>Current Class</label>
            <input type="number" name="class" required>
          </div>
          <div class="input-block">
            <label>Upload your photo</label>
          </div>  
            <input type="file" class="form-control" name="photo" accept=".jpg,.jpeg" required>
            <label>Accept (.jpeg/.jpg) file only</label>
            <br>
            <br>
          <div class="input-block">
            <label>Password</label>
            <input type="password" name="password" required minlength="8">
          </div>  
            <input type="checkbox" class="form-check-input" name="condition" value="accepted" required>
              <label>I accept that all the entries are verified by me.</label>
        </fieldset>
        <input type="submit" class="btn-login" value="Register Now">
      </form>
    </div>
  </div>
</section>






	<?php include('footer.php'); ?>

	 <!-- ========================= scroll-top start ========================= -->
    <a href='#' class='scroll-top'> <i class='lni lni-chevron-up'></i> </a>
    <!-- ========================= scroll-top end ========================= -->

	<?php include('script.php'); ?>


  <script type="text/javascript">
    

      // Signup

      const switchers = document.querySelectorAll('.switcher');

      switchers.forEach(item => {
          item.addEventListener('click', function() {
              switchers.forEach(item => item.parentElement.classList.remove('is-active'));
              this.parentElement.classList.add('is-active');
          });
      });

  </script>

  </body>	

</html>  
