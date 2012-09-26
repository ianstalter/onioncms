<?php
session_start();
$_SESSION['ref'] = $_SERVER['SCRIPT_NAME'];
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
	 echo'---> <a href = "/onioncms/actions/logout.php"> logout </a>';
	 	 echo"---> <a href = '/onioncms/default.php/?Id=". $_GET['id'] . "'>home </a>";
				 echo"---> <a href = '/onioncms/actions/removetask.php/?taskid=" . "$_GET[taskid]" ."'>   remove this task</a>";
				 				 echo"---> <a href = '/onioncms/actions/commenttask.php/?taskid=" . "$_GET[taskid]" ."'>   add comment to this task</a>";
								 
								 				 				 echo"---> <a href = '/onioncms/actions/taskresolve.php/?taskid=" . "$_GET[taskid]" ."'>   change this task to resolved</a>";




} else {
    header('location:/onioncms/login_form.php/');
}
?>


<title>Task View</title>
<?php



$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);
  $result = mysql_query("SELECT * FROM content WHERE ID='$_GET[id]'");

  while($row = mysql_fetch_array($result)){
echo "</br>---Parent Project:" . " <a href='http://localhost/onioncms/single.php/?Id=" . $row['ID'] . "'>" . $row['Title'] . "</a>---";
echo "</br>";
  }
// echo $_GET['taskid'];

 $result = mysql_query("SELECT * FROM tasks WHERE id='$_GET[taskid]'");

  while($row = mysql_fetch_array($result)){
  
 echo "<h1>" . $row['task'] . "</h1><span class='meta'>Creation date: " . $row['date'] . "--Time:" . $row['time'] . "</span></br>";
  echo "<p>" . $row['content'] . "</p>" ;
//echo "<span class = 'meta'> Tags:&nbsp;";

//$test=( explode( ',', $row['tags'] ) );
//$i=0;
//$a = (count($test));
//while($i < $a)
//{ 
//echo "<a href='http://localhost/onioncms/tags.php/?tag=" . $test[$i] . "'>" . $test[$i] . "</a>&nbsp;";
//$i++;
//}

//echo "</span></br></br>";
echo "<span class = 'meta'> Reported by--" . $row['reported'] . "</br> Assigned to--" . $row['assigned'] . "</br> Status --" . $row['status'];
echo "</span> </br>";  }


$result = mysql_query("SELECT * FROM comment WHERE associated='$_GET[taskid]'");

  while($row = mysql_fetch_array($result)){
  
  echo "</br>&nbsp;&nbsp;&nbsp;&nbsp;COMMENTS:</br> <span class='meta'>&nbsp;&nbsp;&nbsp;&nbsp;" . $row['time'] . "--->&nbsp;&nbsp;&nbsp; Written by: " . $row['user'] . "</span>";
 echo " -->&nbsp;&nbsp;" .  $row['comment'] . "</br>"  ;
  }



mysql_close($con);
?> 
