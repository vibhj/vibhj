<?php 

 session_start();


if (isset($_SESSION['email'])) {
  

$email = $_SESSION['email'];
$mesg = $_POST['message'];

include('database_connection.php');



     mysql_query("UPDATE teacher SET `Message By Teacher` = '$mesg' WHERE Email = '$email'");
    
     echo "<script>
    alert('Message Sent...');
    window.location.href='teacher_dashboard_queries.php';
    </script>";





}
else {
  echo "<script>
  alert('Login credentials does not match !!! Try again ...');
  window.location.href='login.php';
  </script>";
}


?>