<?php 

	session_start();

	$e=$_POST['email'];
	$p=$_POST['password'];

	$_SESSION['email']=$e;
	$_SESSION['pwd']=$p;

	include('database_connection.php');

	

$query1 = "Select * from admin where Email='$e' and Password='$p'";
$result1 = mysql_query($query1);
$row1 = mysql_num_rows($result1);


$query2 = "Select * from teacher where Email='$e' and Password='$p'";
$result2 = mysql_query($query2);
$row2 = mysql_num_rows($result2);


$query3 = "Select * from studentparent where Email='$e' and Password='$p'";
$result3 = mysql_query($query3);
$row3 = mysql_num_rows($result3);



if ($row1 != 0) 
{
	$_SESSION['email'] = $e;
	echo "<script>
	alert('Login Successfull ...');
	window.location.href='admin_dashboard.php';
	</script>";

}
else if ($row2 != 0) 
{
	$_SESSION['email'] = $e;
	echo "<script>
	alert('Login Successfull ...');
	window.location.href='teacher_dashboard.php';
	</script>";

}
else if ($row3 != 0) 
{
	$_SESSION['email'] = $e;
	echo "<script>
	alert('Login Successfull ...');
	window.location.href='student_dashboard.php';
	</script>";

}
else
{
	echo "<script>
	alert('Login Credentials doesnot match !!!');
	window.location.href='login.php';
	</script>";
}

?>