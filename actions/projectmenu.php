<head>
<style type="text/css">
span {background-color:lightblue; text-align:left; color:brown;}
a {color:white; background-color:black;}

</style>
</head>

<?php
 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

$result = mysql_query("SELECT * FROM content ORDER BY `ID` DESC");


//for ($z=1; $z<4; $z++)
while($row = mysql_fetch_array($result)) 
  {
	  //$row = mysql_fetch_array($result);
  
  echo "<span class ='meta'>::<a href='http://localhost/onioncms/default.php/?Id=" . $row['ID'] . "'>" . $row['Title'] . "</a></span>";

  }



mysql_close($con);
?> 
<body>
</body>
</html>