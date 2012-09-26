<?php
session_start();
if($_SESSION['logged'] == 1) {
    echo 'You are logged in --- ' . $_SESSION['username'];
	 echo'---><a href = "/onioncms/actions/logout.php">  logout </a>';
} else {
    header('location:/onioncms/login_form.php/');
}
?>
      
      
            <html>
            ---><a href = "/onioncms/default.php/">  home </a>
            
            <table width="950" border="0">
  <tr>
 
  

  

    <td width="200" valign="top">     ADD TASK </br>
            <form action="/onioncms/actions/insert.php" method="post">
            Title </br><input type="text" name="Title" /></br>
<textarea name="Content" id="Content" rows="15" columns="35"> </textarea>
</br>
Tags:</br> <input type="text" name="Tags" id="Tags" /></br>

</br>
<input type="submit" />

</form></td>

    <td>   ADD PROJECT </br>
            <form action="/onioncms/actions/inserttask.php" method="post">
            title </br><input type="text" name="task" /></br>
<textarea name="content" id="content" rows="15" columns="35"> </textarea>
</br>
assigned to</br> <input type="text" name="assigned" id="assigned" /></br>

status </br>
<input type="radio" name="status" value="planned">planned<br>
<input type="radio" name="status" value="open">open</br>
<input type="submit" />

</form></td>
    <td valign="top"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

     

            
       

</html>