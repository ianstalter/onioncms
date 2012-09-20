<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//header("Location: editor.php");

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

if ($_POST[Position]=='left')
{

$sql="INSERT INTO leftmenus (Title, Url)
VALUES
('$_POST[Title]','$_POST[Url]')";
}

if ($_POST[Position]=='right')
{

$sql="INSERT INTO rightmenus (Title, Url)
VALUES
('$_POST[Title]','$_POST[Url]')";
}

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


echo $_POST['Title'];
echo "</br>";
echo "<p>";
echo $_POST['Url'];
echo "</p>";



mysql_close($con);

?> 
