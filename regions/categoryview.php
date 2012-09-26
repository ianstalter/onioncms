<?php
session_start();
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
	 echo'---> <a href = "/onioncms/actions/logout.php"> logout </a>';
	 	 echo'---> <a href = "/onioncms/default.php/?Id=1"> home </a>';

} else {
    header('location:/onioncms/login_form.php/');
}
?>



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
