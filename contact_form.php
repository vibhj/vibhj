<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];


include('database_connection.php');


		$query = "INSERT into contact values ('$name','$email','$number','$subject','$message',CURDATE(), CURTIME(), 'No')";
		mysql_query($query);

			echo "<script>
		alert('Your query is submitted... We will response you soon....');
		window.location.href='contact.php';
		</script>";


?>