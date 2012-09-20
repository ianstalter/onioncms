<?php
 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

$result = mysql_query("SELECT * FROM content ORDER BY `ID` DESC");


while($row = mysql_fetch_array($result)) 
  {
  
  echo "<h1><a href='http://localhost/onioncms/single.php/?Id=" . $row['ID'] . "'>" . $row['Title'] . "</a></h1><span class='meta'>&nbsp;&nbsp;&nbsp;&nbsp;Date:" . $row['Date'] . "--Time:" . $row['time'] . "</span></br>";
  echo "<p>" . $row['Content'] . "</p></br></br>";
  }

mysql_close($con);
?> 
