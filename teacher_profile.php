<?php 

 session_start();


if (isset($_SESSION['email'])) {
  

$email = $_SESSION['email'];
$phone_no = $_POST['number'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$subject = $_POST['subject'];
$exper = $_POST['teach_experience'];
$trial = $_POST['trial_days'];
$link = $_POST['link'];
$photo = $_FILES['photo']['name'];
$resume = $_FILES['resume']['name'];

include('database_connection.php');


if($photo == '' and $resume == ''){

 mysql_query("UPDATE teacher SET `Phone no.` = '$phone_no',`Address` = '$address',`City` = '$city',`State` = '$state',`Pincode` = '$pincode',`Subjects` = '$subject',`Experience` = '$exper',`Trial Days` = '$trial',`Link` = '$link' WHERE Email = '$email'");

echo "<script>
    alert('Updated...');
    window.location.href='teacher_dashboard_profile.php';
    </script>";
}

elseif($photo != '' and $resume == '')
{

 mysql_query("UPDATE teacher SET `Phone no.` = '$phone_no',`Address` = '$address',`City` = '$city',`State` = '$state',`Pincode` = '$pincode',`Subjects` = '$subject',`Experience` = '$exper',`Trial Days` = '$trial',`Link` = '$link',`Profile Photo` = '$photo' WHERE Email = '$email'");

  move_uploaded_file($_FILES['photo']['tmp_name'],'assets/img/upload_photo/'.$_FILES['photo']['name']);
    // move_uploaded_file($_FILES['resume']['tmp_name'],'assets/resumes/'.$_FILES['resume']['name']);

echo "<script>
    alert('Updated...');
    window.location.href='teacher_dashboard_profile.php';
    </script>";

}

elseif($photo == '' and $resume != '')
{

 mysql_query("UPDATE teacher SET `Phone no.` = '$phone_no',`Address` = '$address',`City` = '$city',`State` = '$state',`Pincode` = '$pincode',`Subjects` = '$subject',`Experience` = '$exper',`Trial Days` = '$trial',`Link` = '$link',`Resume` = '$resume' WHERE Email = '$email'");

  // move_uploaded_file($_FILES['photo']['tmp_name'],'assets/img/upload_photo/'.$_FILES['photo']['name']);
    move_uploaded_file($_FILES['resume']['tmp_name'],'assets/resumes/'.$_FILES['resume']['name']);

echo "<script>
    alert('Updated...');
    window.location.href='teacher_dashboard_profile.php';
    </script>";

}




}

?>

  
 