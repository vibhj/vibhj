<?php 

  session_start();


if (isset($_SESSION['email'])) {
  
  /* ----------------Admin Dashboard Page---------------------------------*/
  include('database_connection.php');

  $query_1 = "Select Count(*) from teacher";
  $result_1 = mysql_query($query_1);
  $ans1 = mysql_fetch_array($result_1);

  $query_2 = "Select Count(*) from studentparent";
  $result_2 = mysql_query($query_2);
  $ans2 = mysql_fetch_array($result_2);

  echo "<!DOCTYPE html>
  <html lang='en'>
    <head>

        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>";

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
        <img src='assets/img/logo/logo.png' alt='Logo' / width='100px'>Admin
    </a>
  </div>
</nav>


<div class='container-fluid'>
  <div class='row'>
    <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-dark sidebar'>
      <div class='position-fixed pt-3'>
        <ul class='nav flex-column'>
          <li class='nav-item'>
            <a class='nav-link active' aria-current='page' href='admin_dashboard.php'>
              <i class='bi bi-house-fill'></i>
              Home
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='admin_dashboard_teacher.php'>
              <i class='bi bi-table'></i>
              Teachers
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='admin_dashboard_studentparent.php'>
             <i class='bi bi-table'></i>
              Students/Parents
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='admin_dashboard_queries.php'>
             <i class='bi bi-chat-square-dots-fill'></i>
              Queries
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

      echo "<div class='justify-content-md-center'>

        <div class='container-fluid pt-4 px-4'>

              <span class='fs-1 fw-bold fst-italic text-muted' id='curnt-time'></span>
              <span class='fs-1 fw-bold'>Admin...</span>

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



      <div class='container-fluid pt-4 px-4' style='margin-top: 7.5%; margin-bottom: 10%;'>
                <div class='row g-4'>
                  <div class='col-sm-6 col-xl-2'>
                        
                    </div>
                    <div class='col-sm-6 col-xl-3'>
                        <div class='bg-light rounded d-flex align-items-center justify-content-between p-4' style='box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;'>
                            <i class='fa fa-chart-line fa-3x text-primary'></i>
                            <div class='ms-3'>
                                <p class='mb-2 text-muted '>Total numbers of registered teachers</p>
                                <h6 class='mb-0 fs-3 text-center text-primary'>";echo $ans1[0]; echo"</h6>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-6 col-xl-2'>
                        
                    </div>
                    <div class='col-sm-6 col-xl-3'>
                        <div class='bg-light rounded d-flex align-items-center justify-content-between p-4' style='box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;'>
                            <i class='fa fa-chart-bar fa-3x text-primary'></i>
                            <div class='ms-4'>
                                <p class='mb-2 text-muted '>Total numbers of registered students & parents </p>
                                <h6 class='mb-0 fs-3 text-center text-primary'>";echo $ans2[0]; echo"</h6>
                            </div>
                        </div>
                    </div>

                    <div class='col-sm-6 col-xl-2'>
                        
                    </div>
                    
                    
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