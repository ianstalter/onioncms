<?php
session_start();
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
	 echo'---> <a href = "/onioncms/actions/logout.php"> logout </a>';
	 	 echo'---> <a href = "/onioncms/default.php/?Id=1"> home </a>';
		 	 	 echo 'Task Removed';


} else {
    header('location:/onioncms/login_form.php/');
}
?>
    

<?php
 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

//$result = mysql_query("SELECT * FROM content ORDER BY `ID` DESC");
  mysql_query("DELETE FROM tasks WHERE id = $_GET[taskid]");


mysql_close($con);
?> 