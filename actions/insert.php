<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//header("Location: editor.php");

date_default_timezone_set('Asia/Shanghai');

$date = date('Y-m-d', time());
$time = date('H:i:s');

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

$_POST[Content]=nl2br($_POST['Content']);

$sql="INSERT INTO content (Title, Content, Date, Time)
VALUES
('$_POST[Title]','$_POST[Content]','$date', '$time')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


echo $_POST['Title'];
echo "</br>";
echo "<p>";
echo 'Content'.nl2br($_POST['Content']);
echo "</p>";



mysql_close($con);

?> 
