<?php 

  session_start();


if (isset($_SESSION['email'])) {
  $e=$_SESSION['email'];
  
  /* ----------------Admin Dashboard Page---------------------------------*/
  include('database_connection.php');

  $query_1 = "Select `First Name`, `Pincode` from studentparent where Email='$e'";
  $result_1 = mysql_query($query_1);
  $ans1 = mysql_fetch_array($result_1);


  echo "<!DOCTYPE html>
  <html lang='en'>
    <head>

        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
         <script src='https://kit.fontawesome.com/8c2dd52184.js' crossorigin='anonymous'></script>

          <link rel='stylesheet' type='text/css' href='assets/css/signup.css'>
         ";

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
          padding-top: 5%;
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
            <a class='nav-link active' aria-current='page' href='student_dashboard.php'>
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
        <h1 class='h2'>Dashboard</h1>
        </div>";

      echo "<div class='justify-content-md-center' style='padding-bottom: 10%; padding-top: 2%;'>

        <div class='container-fluid pt-4 px-4'>

              <span class='fs-1 fw-bold fst-italic text-muted' id='curnt-time'></span>
              <span class='fs-1 fw-bold'> &nbsp; ";echo $ans1[0]; echo "</span>

              <script>
                let message;
                var time = new Date();
                var hours = time.getHours();
                if(hours>5 && hours<12){
                message='Good Morning!';
                }
                else if(hours>12 && hours<18)
                  {
                   message='Good Afternoon!';
                  }
                else{
                  message='Good Evening!';
                }
                document.getElementById('curnt-time').innerHTML=message;
              </script>  
        </div>
            </div>";
echo "<div class='justify-content-md-center'>

        <div class='container-fluid pt-4 px-4'>


          

            <a class='fs-3 fw-bold' data-bs-toggle='collapse' href='#collapseExample'  aria-expanded='false' aria-controls='collapseExample' style='text-decoration: none; color:  #1C6EA4;'>
              <span><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='-2.1 -5 16 16' preserveAspectRatio='xMinYMid meet' overflow='visible'><path d='M.5 0C0 0-.2.3.2.7l5 5c.4.4 1 .4 1.4 0l5-5c.4-.4.3-.7-.3-.7H.5z' fill='#999'/></svg></span> Teachers Near By You
            </a>
           <div class='collapse show container overflow-hidden' id='collapseExample' style='padding-top: 2%;'>";

               $query_2_1 = "Select COUNT(*) from teacher where `Pincode`='$ans1[1]' and `Verified`='Yes'";
               $result_2_1 = mysql_query($query_2_1);
               $ans2_1 = mysql_fetch_array($result_2_1);
             
              if($ans2_1[0] !=0){

                $query_2 = "Select * from teacher where `Pincode`='$ans1[1]' and `Verified`='Yes'";
                $result_2 = mysql_query($query_2);
                while($ans2 = mysql_fetch_array($result_2))
                {

                echo "
                  
                  <div class='card mb-3' style='max-width: 750px; margin: 4rem auto;'>
                      <div class='row g-0'>
                        <div class='col-md-4'style='background-color: #1C6EA4;'>
                          <div style='margin-top: 10%;'><h6 class='text-center' style='color: white; font-weight: 400;'>Verified</h6></div>
                          <img src='assets/img/upload_photo/$ans2[17]' class='rounded mx-auto d-block' alt='' style='width: 180px; height: 180px; border-radius: 50%!important; margin-bottom: 10%; padding: 0 15px;'>
                        </div>
                        <div class='col-md-8' >
                          <div class='card-body'>
                            <h5 class='card-title text-center fs-3'>$ans2[0] $ans2[1]</h5>
                            <div class='row' style='padding-top: 5%;'>
                              <div class='col'>
                                <i class='bi bi-envelope'></i> $ans2[2]
                                <br>
                                <i class='bi bi-geo-alt'></i> $ans2[5], $ans2[6], $ans2[7]
                              </div>
                              <div class='col'>
                                <i class='bi bi-mortarboard-fill'></i> $ans2[11]
                                <br>
                                <i class='bi bi-book'></i> $ans2[13]
                                <br>
                                <i class='bi bi-calendar2-day'></i>  $ans2[15] Trial Classes
                                <br>
                                <i class='bi bi-briefcase'></i> $ans2[14] Years of Experience
                                <br>
                                <i class='bi bi-whatsapp'></i> +91-$ans2[4]
                                <br>
                                <i class='bi bi-telephone'></i> +91-$ans2[4]
                                <br>
                                

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>


                ";
               
               }

             }
             else{
              echo " <div class='text-center'><h4 class='text-muted'>No teachers are available near by you.</h4></div>";
             }

              echo "
           </div>

           <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'></div>

           <a class='fs-3 fw-bold'  data-bs-toggle='collapse' href='#collapseExample2'  aria-expanded='false' aria-controls='collapseExample2' style='text-decoration: none; color:  #1C6EA4;'>
            <span ><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='-2.1 -5 16 16' preserveAspectRatio='xMinYMid meet' overflow='visible'><path d='M.5 0C0 0-.2.3.2.7l5 5c.4.4 1 .4 1.4 0l5-5c.4-.4.3-.7-.3-.7H.5z' fill='#999'/></svg></span> Available Teachers   
            </a>
           <div class='collapse container overflow-hidden' id='collapseExample2' style='padding-top: 2%;'>";
                
              $query_3 = "Select * from teacher where `Verified`='Yes'";
              $result_3 = mysql_query($query_3);
              

               while($ans3 = mysql_fetch_array($result_3))
               {

                echo "
                <div class='card mb-3' style='max-width: 750px; margin: 4rem auto;'>
                      <div class='row g-0'>
                        <div class='col-md-4'style='background-color: #1C6EA4;'>
                          <div style='margin-top: 10%;'><h6 class='text-center' style='color: white; font-weight: 400;'>Verified</h6></div>
                          <img src='assets/img/upload_photo/$ans3[17]' class='rounded mx-auto d-block' alt='' style='width: 180px; height: 180px; border-radius: 50%!important; margin-bottom: 10%; padding: 0 15px;'>
                        </div>
                        <div class='col-md-8' >
                          <div class='card-body'>
                            <h5 class='card-title text-center fs-3'>$ans3[0] $ans3[1]</h5>
                            <div class='row' style='padding-top: 5%;'>
                              <div class='col'>
                                <i class='bi bi-envelope'></i> $ans3[2]
                                <br>
                                <i class='bi bi-geo-alt'></i> $ans3[5], $ans3[6], $ans3[7]
                              </div>
                              <div class='col'>
                                <i class='bi bi-mortarboard-fill'></i> $ans3[11]
                                <br>
                                <i class='bi bi-book'></i> $ans3[13]
                                <br>
                                <i class='bi bi-calendar2-day'></i>  $ans3[15] Trial Classes
                                <br>
                                <i class='bi bi-briefcase'></i> $ans3[14] Years of Experience
                                <br>
                                <i class='bi bi-whatsapp'></i> +91-$ans3[4]
                                <br>
                                <i class='bi bi-telephone'></i> +91-$ans3[4]
                                <br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>";

               }

               echo "

           </div>


           </div> 



        </div>";

      echo "</main>
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

        <script>
          $(document).ready(function() {
              $('#teacher_table').DataTable();
          } );
      </script>
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