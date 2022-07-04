<?php 

session_start();
if(isset($_SESSION['email']))
{

  $v1=$_GET['new_value'];

  echo "<center><h1>Send comment/message to Teacher</h1>
  <br><br><form method='POST' action='' >
  For $v1 : <textarea name='comment' rows='5' cols='50' class='form-control' placeholder='Any comments !!! ' required id='comment'></textarea><br><br>
  
    <button type='submit' value='Update' onclick='updat();'>Send Message</button>
    </form>
  </center>";

  $val = $_POST['comment'];



        
  
  include('database_connection.php');

  mysql_query("Update teacher set `Message By Admin`='$val' Where Email='$v1'");
  



  echo "<div style='padding-top:5%; font-size:25px; padding-left: 10%;'><a href='logout.php' >Logout</a></div>"; 

  echo "<script>
  function updat()
  {
    if(document.getElementById('comment').value.length == 0)
    {
        alert('Empty!!! Please type your comment/message...');
    }
    else
    {
      alert('Comment/Message sent ...'); 
      
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