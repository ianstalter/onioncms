<?php
session_start();
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
	 echo'---> <a href = "/onioncms/actions/logout.php"> logout </a>';
	 	 echo'---> <a href = "/onioncms/default.php/?Id=1"> home </a>';
		 	 	 echo '--> Project Added!';
} else {
    header('location:login_form.php');
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//header("Location: editor.php");

date_default_timezone_set('Asia/Shanghai');

$date = date('M-d-D', time());
$time = date('H:i');


$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

$_POST['Content']=nl2br($_POST['Content']);

$sql="INSERT INTO content (Title, Content, Date, Time, Tags, assigned, reported, status)
VALUES
('$_POST[Title]','$_POST[Content]','$date', '$time', '$_POST[Tags]', '$_POST[assigned]','$_SESSION[username]', '$_POST[status]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


//echo $_POST['Title'];
//echo "</br>";
//echo "<p>";
//echo 'Content'.nl2br($_POST['Content']);
//echo "</p>";



mysql_close($con);

?> 
