<?php
session_start();
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
		 	 echo"---> <a href = '/onioncms/default.php/?Id=" . $_GET['Id'] . "'>go back</a>";

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

$_POST['content']=nl2br($_POST['content']);

$sql="INSERT INTO tasks (task, content, date, time, status, assigned, reported, associated, comment_count, priority)
VALUES
('$_POST[task]','$_POST[content]','$date', '$time', '$_POST[status]', '$_POST[assigned]','$_SESSION[username]', '$_GET[Id]', '0', '$_POST[priority]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }



mysql_close($con);

?> 
