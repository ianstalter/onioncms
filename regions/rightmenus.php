<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view</title>
</head>


    

<?php
 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

$result = mysql_query("SELECT * FROM rightmenus");


while($row = mysql_fetch_array($result))
  {
  
  echo "<a href =" . $row['Url'] . '"> <span style="font-family: Arial;background-color:lightgray;">' . $row['Title'] . '</span></a>';
  echo "</br></br>";
 
  }

mysql_close($con);
?> 
<body>
</body>
</html>