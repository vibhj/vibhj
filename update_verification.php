<?php 

session_start();
if(isset($_SESSION['email']))
{

	$v1=$_GET['new_value'];

	echo "<center><h1>Verify Teacher Account</h1>
	<br><br><form method='POST' action='' >
	For $v1 : <input type='text' name='verified' required id='verification'><br><br>
	
		<button type='submit' value='Update' onclick='updat();'>Update</button>
		</form>
	</center>";

	$val = $_POST['verified'];



				
	
	include('database_connection.php');

	mysql_query("Update teacher set Verified='$val' Where Email='$v1'");
	



	echo "<div style='padding-top:5%; font-size:25px; padding-left: 10%;'><a href='logout.php' >Logout</a></div>"; 

	echo "<script>
	function updat()
	{
		if(document.getElementById('verification').value.length == 0)
		{
		    alert('Empty!!! Please fill Yes/No...');
		}
		else
		{
			alert('Value updated ...');	
			
		}
	}
	</script>";

}

else {
  echo "<script>
  alert('Login credentials does not match !!! Try again ...');
  window.location.href='login.php';
  </script>";
}

?>