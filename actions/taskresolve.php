<?php
session_start();

$ref = $_SESSION['ref'];
$fullref = $ref . "/?taskid=" . $_GET['taskid'];

if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
		 	 echo"---> <a href = '/onioncms/default.php/?Id=1'>go back</a>";

} else {
    header('location:login_form.php');
}
?>


<?php
//header("Location: editor.php");

date_default_timezone_set('Asia/Shanghai');

$date = date('m-d', time());
$time = date('H:i');

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

$sql="UPDATE tasks SET status = 'resolved' WHERE id = $_GET[taskid]";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

?>
 

<html>
<head>

<script language="JavaScript">
var time = null
function move() {

window.location = "<?php echo $fullref ?>";

}
//-->
</script>
</head>
<body onload="timer=setTimeout('move()',1000)">
<h2>Redirecting back to main</h2>

</body>
</html>