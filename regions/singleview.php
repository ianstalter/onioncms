<head>
<style type="text/css">
span {background-color:lightblue; text-align:left; color:brown;}
a {color:white; background-color:black;}

</style>
</head>

<?php
session_start();
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
	 echo'---> <a href = "/onioncms/actions/logout.php"> logout </a>';
	 	 echo"---> <a href = '/onioncms/default.php/?Id=". $_GET['Id'] . "'>home </a>";
		 	 	 echo"---> <a href = '/onioncms/actions/addtask.php/?Id=" . "$_GET[Id]" ."'>   add tasks to this project </a>";
				 echo"---> <a href = '/onioncms/actions/removeproject.php/?Id=" . "$_GET[Id]" ."'>   remove this project</a>";


} else {
    header('location:/onioncms/login_form.php/');
}
?>


<title>Single View</title>
<?php



$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);



  $result = mysql_query("SELECT * FROM content WHERE Id='$_GET[Id]'");

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
echo "</span></br></br>TASKS</br></br>";  }



mysql_select_db("mycms", $con);

//$result = mysql_query("SELECT * FROM tasks ORDER BY `ID` DESC");
  $result = mysql_query("SELECT * FROM tasks WHERE associated='$_GET[Id]'");

while($row = mysql_fetch_array($result)) 
//for ($z=1; $z<5; $z++)
  {
	  //$assrow = $row['id'];
	    //  $result2 = mysql_query("SELECT * FROM comments WHERE associated=$assrow");
		// while ($row2=mysql_fetch_array($result2))
		 //{
	//		 echo '('. count($row2['comment']) .  ')' ;
		// }
	 // $row = mysql_fetch_array($result);
	 
  
  echo "<span class='meta'><a href='http://localhost/onioncms/actions/task.php/?id=" . $row['associated'] . 
   "&&taskid=" . $row['id'] . "'>" . $row['task'] . "</a> -- " . $row['status'] . "(" . $row['comment_count'] . ")" . "</span></br></br>";
   
   $assid = $row['id'];
  }
  
  //$assid = $row['id'];
 // echo $row['id'];
  echo $assid;

$result2 = mysql_query("SELECT * FROM comment WHERE associated = $assid");


  while($row2 = mysql_fetch_array($result2)){
  echo $row2['comment'] . '</br></br>';
  
  }


mysql_close($con);
?> 