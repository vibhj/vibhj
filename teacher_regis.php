<?php 

$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone_no = $_POST['number'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$ten = $_POST['10_per'];
$twelve = $_POST['12_per'];
$high_degree = $_POST['degree'];
$high_per = $_POST['highest_per'];
$subject = $_POST['subject'];
$exper = $_POST['teach_experience'];
$trial = $_POST['trial_days'];
$link = $_POST['link'];
$photo = $_FILES['photo']['name'];
$resume = $_FILES['resume']['name'];
$password = $_POST['password'];
$condition = $_POST['condition'];


if ($gender =="")
{
	echo "<script>
		alert('Choose your gender ...');
		window.location.href='signup.php';
		</script>";
}


else{
	
	include('database_connection.php');

	$query = "Select * from teacher Where Email='$email' ";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);


	if($row == 0){
		$photo_path = "assets/img/upload_photo/".$photo;
		$resume_path = "assets/resumes/".$resume;
		$query1 = "INSERT into teacher values ('$f_name','$l_name','$email','$gender','$phone_no','$address','$city','$state','$pincode','$ten','$twelve','$high_degree','$high_per','$subject','$exper','$trial','$link','$photo','$resume','$password','$condition',CURDATE(), CURTIME(),'No','No message from teacher side.','No message from admin side.')";
		mysql_query($query1);

		move_uploaded_file($_FILES['photo']['tmp_name'],'assets/img/upload_photo/'.$_FILES['photo']['name']);
		move_uploaded_file($_FILES['resume']['tmp_name'],'assets/resumes/'.$_FILES['resume']['name']);

		echo "<script>
		alert('You are successfully registerd ... Now Login !!!');
		window.location.href='login.php';
		</script>";
	}
	else{

			echo "<script>
		alert('User already exist !!!')
		window.location.href='signup.php';
		</script>";

}


}


?>