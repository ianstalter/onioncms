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

$result = mysql_query("SELECT * FROM content ORDER BY `ID` DESC");


for ($i=1; $i<4; $i++)
  {
	  $row = mysql_fetch_array($result);
  
  echo "<h1><a href='http://localhost/onioncms/single.php/?Id=" . $row['ID'] . "'>" . $row['Title'] . "</a></h1><span class='meta'>Date:" . $row['Date'] . "--Time:" . $row['time'] . "</span></br>";
  echo "<p>" . $row['Content'] . "</p></br></br>";
  }



mysql_close($con);
?> 
<body>
</body>
</html>