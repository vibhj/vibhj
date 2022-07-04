<?php 



 session_start();


if (isset($_SESSION['email'])) {
  include('database_connection.php');

  
 
  /* ----------------Admin Dashboard Page---------------------------------*/

  $query_1 = "Select * from contact";
  $result_1 = mysql_query($query_1);


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
            <a class='nav-link' aria-current='page' href='admin_dashboard.php'>
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
            <a class='nav-link active' href='admin_dashboard_queries.php'>
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
        <h1 class='h2'>Queries</h1>
        </div>";

      echo "<div class='justify-content-md-center table-responsive'>";
      echo "<table id='teacher_table' class='table table-bordered align-middle table-striped' style='width:100%; padding-top: 2.5%; padding-bottom: 2%;'>";
      echo "<thead>";
      echo "<tr >";
      echo "<th scope='col' > Name </th>";
      echo "<th scope='col' > Email </th>";
      echo "<th scope='col' > Phone no. </th>";
      echo "<th scope='col' > Subject </th>";
      echo "<th scope='col' > Message </th>";
      echo "<th scope='col' > Date </th>";
      echo "<th scope='col' > Time </th>";
      echo "<th scope='col' > Response given (Yes/No) </th>";
      
      echo "</tr>";
      echo "</thead>";
      

      while($row_1 = mysql_fetch_array($result_1))
      {
      echo "<tbody>";
      echo "<tr>";
      echo "<td >" .$row_1[0]. "</td>";
      echo "<td >" .$row_1[1]. "</td>";
      echo "<td >" .$row_1[2]. " </td>";
      echo "<td >" .$row_1[3]. " </td>";
      echo "<td >" .$row_1[4]. "</td>";
      echo "<td >" .$row_1[5]. "</td>";
      echo "<td >" .$row_1[6]. " </td>";     
      echo "<td >" .$row_1[7]. "&nbsp;&nbsp;<a href='update_response.php?new_value=$row_1[1]' target='_blank' class='btn btn-secondary btn-sm' role='button'>Update</a></td>";
      echo "</tr>";
      echo "</tbody>";
      

      }
      echo "</table>";
      echo "</div>";


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