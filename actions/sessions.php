<?php
// start the session //
session_start();

// create one flag //
$_SESSION['logged'] = FALSE;

// username, password from form submit //
$username = $_POST['user'];
$password = $_POST['password'];

// check once in database //
//$con = mysql_connect("localhost","root","");
$con = mysql_connect("localhost","root","");
mysql_select_db("mycms", $con);

$result = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");

if($row = mysql_fetch_array($result)) 
  
{
	//echo $row['username'];
	//echo $row['password'];
	    $_SESSION['logged'] = TRUE;
 $_SESSION['username'] = $username;
echo    "Welcome " . $_SESSION['username'];
	
	
} 
else {
    echo "invalid username or password!!";
}

?>


<html>
--> <a href="/onioncms/default.php/?Id=1">home</a>
--> <a href="/onioncms/actions/newproject.php/">create project</a>
</html>