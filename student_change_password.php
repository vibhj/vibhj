<?php 

 session_start();


if (isset($_SESSION['email'])) {
  

$email = $_SESSION['email'];
$old = $_POST['old'];
$new = $_POST['new'];
$c_new = $_POST['confirm_new'];

include('database_connection.php');

$query = "Select Password from studentparent Where Email='$email' ";
$result = mysql_query($query);
$row = mysql_fetch_array($result);


if($new != $c_new){

    echo "<script>
    alert('New Password and Confirm New Password does not match! Try again...');
    window.location.href='student_dashboard_password.php';
    </script>";
}


elseif($old != $row[0]){
    
    echo "<script>
    alert('Old Password does not match with database! Try again... ');
    window.location.href='student_dashboard_password.php';
    </script>";

    


}

else{

     mysql_query("UPDATE studentparent SET `Password` = '$new' WHERE Email = '$email'");

     session_start();
    session_unset();
    session_destroy();
    
     echo "<script>
    alert('Password Updated...');
    window.location.href='login.php';
    </script>";




}

}


?>