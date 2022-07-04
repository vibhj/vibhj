<?php 

  session_start();


if (isset($_SESSION['email'])) {
  $e=$_SESSION['email'];
  
  /* ----------------Admin Dashboard Page---------------------------------*/

  include('database_connection.php');


  echo "<!DOCTYPE html>
  <html lang='en'>
    <head>

        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
         <script src='https://kit.fontawesome.com/8c2dd52184.js' crossorigin='anonymous'></script>

          <link rel='stylesheet' type='text/css' href='assets/css/signup.css'>";

      include('links.php');


      /* ------------------ CSS for table ---------------------*/
      echo "
      <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css'>

      <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css'>";
      

      /* ------------------ JS for table ---------------------*/

      echo "

      <style>
        body{
          overflow-x: hidden;
        }
        .navbar-brand{
          font-size: x-large;
        }
        .sidebar .nav-item{
          padding-top: 10%;
        }
        .sidebar .nav-link{
          font-size: large;
          color: #FAF9F6;
        }
        .nav-link.active{
          border: 2px solid #1C6EA4;
          border-radius: 40px;
        }
        .nav-link:hover{
          color: #1C6EA4;
          border: 2px solid white;
          border-radius: 40px;
        }
        .justify-content-md-center{
          overflow-x: auto;
          padding-top: 2%;
          padding-bottom: 5%;
        }
        
        .form-control{
          width: 150%;
        }
        .collapsed span svg{
          transform: rotate(270deg);
          transition: 2s;
        }
        .btn-login{
          border-radius: 25px;
        }
        
        
      </style>

    </head>
    <body>";

    include('preloader.php');
    $query_1 = "Select * from studentparent where Email='$e'";
    $result_1 = mysql_query($query_1);
    $ans1 = mysql_fetch_array($result_1);

    echo "

    <nav class='navbar navbar-expand-lg sticky-top navbar-dark bg-dark shadow'>
  <div class='container'>
    <a class='navbar-brand' href='index.php'>
        <img src='assets/img/logo/logo.png' alt='Logo' / width='100px'>Student/Parent
    </a>
  </div>
</nav>


<div class='container-fluid'>
  <div class='row'>
    <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-dark sidebar'>
      <div class='position-fixed pt-3'>
        <ul class='nav flex-column'>
          <li class='nav-item'>
            <a class='nav-link' aria-current='page' href='student_dashboard.php'>
              <i class='bi bi-house-fill'></i>
              Home
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='student_dashboard_profile.php'>
              <i class='fas fa-user'></i>
              Edit Profile
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='student_dashboard_password.php'>
             <i class='fas fa-key'></i>
              Change Password
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='logout.php'>
              <i class='bi bi-box-arrow-left'></i>
              Signout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'>
      <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
        <div class='container'>
          <h1 class='h2'>Available Teachers</h1>
        </div>
        </div>";

      echo "<div class='justify-content-md-center'>

        <div class='container-fluid pt-4 px-4'>


          <form method='POST' action='student_update_profile.php' enctype='multipart/form-data'>

            <a class='fs-3 fw-bold' data-bs-toggle='collapse' href='#collapseExample'  aria-expanded='false' aria-controls='collapseExample' style='text-decoration: none; color:  #1C6EA4;'>
              <span><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='-2.1 -5 16 16' preserveAspectRatio='xMinYMid meet' overflow='visible'><path d='M.5 0C0 0-.2.3.2.7l5 5c.4.4 1 .4 1.4 0l5-5c.4-.4.3-.7-.3-.7H.5z' fill='#999'/></svg></span> General 
            </a>
           <div class='collapse show container overflow-hidden' id='collapseExample' style='padding-top: 2%;'>
                <div class='row g-2'>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>First Name</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input class='form-control' type='text' value='$ans1[0]' disabled>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>Last Name</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input class='form-control' type='text' value='$ans1[1]' disabled>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>Email</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input class='form-control' type='text' value='$ans1[2]' disabled>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>Phone no. (Whatsapp no.) </div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input class='form-control' type='tel' name='number' maxlength='10' value='$ans1[4]' required>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>Address</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input class='form-control' type='text' value='$ans1[5]' name='address' required>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>City</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input class='form-control' type='text' value='$ans1[6]' name='city' required>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>State</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <select name='state' required class='form-select'>
                          <option selected value='$ans1[7]'>$ans1[7]</option>
                          <option value='Andhra Pradesh'>Andhra Pradesh</option>
                          <option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option>
                          <option value='Arunachal Pradesh'>Arunachal Pradesh</option>
                          <option value='Assam'>Assam</option>
                          <option value='Bihar'>Bihar</option>
                          <option value='Chandigarh'>Chandigarh</option>
                          <option value='Chhattisgarh'>Chhattisgarh</option>
                          <option value='Dadar and Nagar Haveli'>Dadar and Nagar Haveli</option>
                          <option value='Daman and Diu'>Daman and Diu</option>
                          <option value='Delhi'>Delhi</option>
                          <option value='Lakshadweep'>Lakshadweep</option>
                          <option value='Puducherry'>Puducherry</option>
                          <option value='Goa'>Goa</option>
                          <option value='Gujarat'>Gujarat</option>
                          <option value='Haryana'>Haryana</option>
                          <option value='Himachal Pradesh'>Himachal Pradesh</option>
                          <option value='Jammu and Kashmir'>Jammu and Kashmir</option>
                          <option value='Jharkhand'>Jharkhand</option>
                          <option value='Karnataka'>Karnataka</option>
                          <option value='Kerala'>Kerala</option>
                          <option value='Madhya Pradesh'>Madhya Pradesh</option>
                          <option value='Maharashtra'>Maharashtra</option>
                          <option value='Manipur'>Manipur</option>
                          <option value='Meghalaya'>Meghalaya</option>
                          <option value='Mizoram'>Mizoram</option>
                          <option value='Nagaland'>Nagaland</option>
                          <option value='Odisha'>Odisha</option>
                          <option value='Punjab'>Punjab</option>
                          <option value='Rajasthan'>Rajasthan</option>
                          <option value='Sikkim'>Sikkim</option>
                          <option value='Tamil Nadu'>Tamil Nadu</option>
                          <option value='Telangana'>Telangana</option>
                          <option value='Tripura'>Tripura</option>
                          <option value='Uttar Pradesh'>Uttar Pradesh</option>
                          <option value='Uttarakhand'>Uttarakhand</option>
                          <option value='West Bengal'>West Bengal</option>
                        </select>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>Pincode</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input class='form-control' type='text' value='$ans1[8]' name='pincode' maxlength='6' required>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>Current Class</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input class='form-control' type='text' value='$ans1[9]' name='class' required>
                    </div>
                  </div>
                  <div class='col-4'></div>
                  <div class='col-4'>
                    <div class='p-3 fs-5 fw-bold'>Upload New Profile Photo</div>
                  </div>
                  <div class='col-3'>
                    <div class='p-3'>
                      <input type='file' class='form-control' name='photo'  accept='.jpg,.jpeg'>
                      <label>Accept (.jpeg/.jpg) file only</label>
                    </div>
                  </div>
                  <div class='col-4'></div>
                </div>
           </div>

           <br>
           <br>
           <center>
             
             <input type='submit' class='btn-login' value='Update Profile'>

           </center>


          </form>  

           </div> 



        </div>

      </main>
           </div>
    
        </div>";

           echo " <!-- ========================= scroll-top start ========================= -->
        <a href='#' class='scroll-top'> <i class='lni lni-chevron-up'></i> </a>
        <!-- ========================= scroll-top end ========================= -->";

      include('script.php'); 

      echo "
        <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
            <script src='https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js'></script>
            <script src='https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js'></script>

        </body>
        </html>";


}



else {
  echo "<script>
  alert('Login credentials does not match !!! Try again ...');
  window.location.href='login.php';
  </script>";
}


?>