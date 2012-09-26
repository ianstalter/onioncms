<?php
session_start();

date_default_timezone_set('America/Los_Angeles');

$date = date('M-d-D', time());
$time = date('H:i');

echo $date . " --- " . $time . " - California - ";

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ian Stalter - CMS</title>
<META NAME="Description" CONTENT="Portfolio introduction site for Ian Stalter web developer, PHP, HTML, CSS.">
<link href="/onioncms/css/mystys.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<div class="container">
<?php
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
			 echo'---> <a href = "/onioncms/actions/newproject.php"> create new project </a>';
			 
		 	 	 echo"---> <a href = '/onioncms/actions/addtask.php/?Id=" . "$_GET[Id]" ."'>   add tasks to this project </a>";

		 echo'---> <a href = "/onioncms/actions/logout.php"> logout </a>';

} else {
    header('location:/onioncms/login_form.php/');
}
?>

  
  <article class="content">



 
 
<table 
style="float:left; display:none;" height="696 valign="top;" width="225" border="0">
  <tr>
    <td bgcolor="white" class="up" style="" width="225"  valign="top"><div class="top";><a style=" text-align:center;">LEFT<br>
              SIDEBAR<br/><br/><br/></a></div>
              <br/>
              <div class="hidde"><?php include ("/regions/leftmenus.php"); ?><br/> 
              
              
              
        </td>
        
  </tr>
</table>
<table valign="top;" style="float:left; text-align:; overflow:hidden;"width="720" height="696" border="0">
  <tr>
    <td valign="top" bgcolor="white"> Project <?php include ("/actions/projectmenu.php"); ?> </br>    <?php include ("/regions/view.php"); ?></br><a href ="/onioncms/archive.php">Read All</a></td>
  </tr>
</table>
<table valign="top;" style="float:left;"width="225">
  <tr>
    <td bgcolor="white" class="up" style="text-align:; " width="225" height="696" valign="top"><div class=;><a style=" text-align:center;">Tasks<br>
              </a></div>
              <br/>
              <div class="hidde">
               <?php include ("/regions/viewtasks.php"); ?>
            </td>
        
  </tr>
</table>

  <!-- end .content --></article>
  </br>
  
  
  <!-- end .container --></div>
</body>
</html>
