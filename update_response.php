<?php 

session_start();
if(isset($_SESSION['email']))
{

	$v1=$_GET['new_value'];

	echo "<center><h1>Update Response given (Yes/No) </h1>
	<br><br><form method='POST' action='' >
	For $v1 : <input type='text' name='response' required id='response'><br><br>
	
		<button type='submit' value='Update' onclick='updat();'>Update</button>
		</form>
	</center>";

	$val = $_POST['response'];



				
	
	include('database_connection.php');

	mysql_query("Update contact set Response='$val' Where Email='$v1'");
	



	echo "<div style='padding-top:5%; font-size:25px; padding-left: 10%;'><a href='logout.php' >Logout</a></div>"; 

	echo "<script>
	function updat()
	{
		if(document.getElementById('response').value.length == 0)
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