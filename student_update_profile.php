<?php 

 session_start();


if (isset($_SESSION['email'])) {
  

$email = $_SESSION['email'];
$phone_no = $_POST['number'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$class = $_POST['class'];
$photo = $_FILES['photo']['name'];

include('database_connection.php');


if($photo == ''){

 mysql_query("UPDATE studentparent SET `Phone no.` = '$phone_no',`Address` = '$address',`City` = '$city',`State` = '$state',`Pincode` = '$pincode',`Current Class` = '$class' WHERE Email = '$email'");

echo "<script>
    alert('Updated...');
    window.location.href='student_dashboard_profile.php';
    </script>";
}

else
{

 mysql_query("UPDATE studentparent SET `Phone no.` = '$phone_no',`Address` = '$address',`City` = '$city',`State` = '$state',`Pincode` = '$pincode',`Current Class` = '$class', `Profile Photo` = '$photo' WHERE Email = '$email'");

  move_uploaded_file($_FILES['photo']['tmp_name'],'assets/img/upload_photo/'.$_FILES['photo']['name']);
    

echo "<script>
    alert('Updated...');
    window.location.href='student_dashboard_profile.php';
    </script>";

}




}

?>

  
 