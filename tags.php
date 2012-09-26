<?php
session_start();
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
} else {
    header('location:login_form.php');
}
?>
--->
<a href="/onioncms/default.php">HOME</a>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<title>Single View</title>
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);


  $result= mysql_query("SELECT * FROM content WHERE tags REGEXP '$_GET[tag]'");

  while($row = mysql_fetch_array($result)){
  
  
  echo "<h1><a href='http://localhost/onioncms/single.php/?Id=" . $row['ID'] . "'>" . $row['Title'] . "</a></h1><span class='meta'>Date:" . $row['Date'] . "--Time:" . $row['time'] . "</span></br>";
  echo "<p>" . $row['Content'] . "</br></p>" ;
echo "<span class = 'meta'> Tags:&nbsp;";

$test=( explode( ',', $row['tags'] ) );
$i=0;
$a = (count($test));
while($i < $a)
{ 
echo "<a href='http://localhost/onioncms/tags.php/?tag=" . $test[$i] . "'>" . $test[$i] . "</a>&nbsp;";
$i++;
}
echo "</span>";
  }



mysql_close($con);
?> 

<body>
</body>
</html>


