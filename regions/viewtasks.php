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
   "&&taskid=" . $row['id'] . "'>" . $row['task'] . "</a> -- " . $row['status'] . "(" . $row['comment_count'] . ")  " . $row['priority'] . "  </span></br></br>";
  }



mysql_close($con);
?> 
<body>
</body>
</html>