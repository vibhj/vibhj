<?php 

  session_start();


if (isset($_SESSION['email'])) {
  $e=$_SESSION['email'];
  
  /* ----------------Admin Dashboard Page---------------------------------*/
  include('database_connection.php');

  $query_1 = "Select `First Name` from teacher where Email='$e'";
  $result_1 = mysql_query($query_1);
  $ans1 = mysql_fetch_array($result_1);


  echo "<!DOCTYPE html>
  <html lang='en'>
    <head>

        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
         <script src='https://kit.fontawesome.com/8c2dd52184.js' crossorigin='anonymous'></script>";

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
      </style>

    </head>
    <body>";

    include('preloader.php');


    echo "

    <nav class='navbar navbar-expand-lg sticky-top navbar-dark bg-dark shadow'>
  <div class='container'>
    <a class='navbar-brand' href='index.php'>
        <img src='assets/img/logo/logo.png' alt='Logo' / width='100px'>Teacher
    </a>
  </div>
</nav>


<div class='container-fluid'>
  <div class='row'>
    <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-dark sidebar'>
      <div class='position-fixed pt-3'>
        <ul class='nav flex-column'>
          <li class='nav-item'>
            <a class='nav-link active' aria-current='page' href='teacher_dashboard.php'>
              <i class='bi bi-house-fill'></i>
              Home
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='teacher_dashboard_profile.php'>
              <i class='fas fa-user'></i>
              Edit Profile
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='teacher_dashboard_password.php'>
             <i class='fas fa-key'></i>
              Change Password
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='teacher_dashboard_queries.php'>
             <i class='bi bi-chat-square-dots-fill'></i>
              Message
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

      echo "<div class='justify-content-md-center' style='padding-bottom: 32%; padding-top: 5%;'>

        <div class='container-fluid pt-4 px-4'>

              <span class='fs-1 fw-bold fst-italic text-muted' id='curnt-time'></span>
              <span class='fs-1 fw-bold'> &nbsp; ";echo $ans1[0] ; echo "</span>

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