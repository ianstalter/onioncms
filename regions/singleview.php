<title>Single View</title>
<?php

define("BASE_DIR", "/localhost/");

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);



  $result = mysql_query("SELECT * FROM content WHERE Id='$_GET[Id]'");

  while($row = mysql_fetch_array($result)){
  echo "<h1>" . $row['Title'] . "</h1>" . "&nbsp;&nbsp;&nbsp;<span class='meta'>Date:" . $row['Date'] . "--Time:" . $row['time'] . "</span></br>";
  echo "<p>" . $row['Content'] . "</p></br></br>";
  }




mysql_close($con);
?> 
