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
$class = $_POST['class'];
$photo = $_FILES['photo']['name'];
$password = $_POST['password'];
$condition = $_POST['condition'];

include('database_connection.php');

$query = "Select * from studentparent Where Email='$email' ";
$result = mysql_query($query);
$row = mysql_num_rows($result);

	if($row == 0){
		$photo_path = "assets/img/upload_photo/".$photo;
		$query1 = "INSERT into studentparent values ('$f_name','$l_name','$email','$gender','$phone_no','$address','$city','$state','$pincode','$class','$photo','$password','$condition',CURDATE(), CURTIME())";
		mysql_query($query1);
		move_uploaded_file($_FILES['photo']['tmp_name'],'assets/img/upload_photo/'.$_FILES['photo']['name']);

			echo "<script>
		alert('You are successfully registerd ... Now Login !!!');
		window.location.href='login.php';
		</script>";
	}
	else{

			echo "<script>
		alert('User already exit !!!')
		window.location.href='signup.php';
		</script>";

}





?>