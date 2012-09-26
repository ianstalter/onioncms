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

$date = date('M-d-D', time());
$time = date('H:i');


$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mycms", $con);

$_POST['comment']=nl2br($_POST['comment']);

$sql="INSERT INTO comment (comment, associated, user, date, time)
VALUES
('$_POST[comment]','$_GET[taskid]','$_SESSION[username]','$date', '$time')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

$var = $_GET['taskid'];
echo $var;

//$sql="UPDATE `mycms`.`tasks` SET `comment_count` = 'comment_count' + 1 WHERE `tasks`.`id` = '$_GET[taskid]'";
$sql="UPDATE tasks SET comment_count = comment_count+1 WHERE id = $_GET[taskid] ";


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