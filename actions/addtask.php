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
            ---><a href = "/onioncms/default.php/?Id=1">  go back </a>
            
            <table width="950" border="0">
  <tr>
 
  

  

    <td width="200" valign="top">     ADD TASK </br>
            <form action="/onioncms/actions/inserttask.php<?php echo "/?Id=" . "$_GET[Id]"?>" method="post">
            Title </br><input style="width:300px" type="text" name="task" /></br>
</br>
Tags(separate by commas):</br> <input style="width:300px;" type="text" name="Tags" id="Tags" /></br>


assigned to</br> <input type="text" name="assigned" id="assigned" /></br>

status </br>
<input type="radio" name="status" id="status" value="planned">planned<br>
<input type="radio" name="status" id="status" value="open">open</br>

</br>


priority </br>
<input type="radio" name="priority" id="priority" value="high">high<br>
<input type="radio" name="priority" id="medium" value="medium">medium</br>
<input type="radio" name="priority" id="low" value="low">low</br>
<input type="submit" />

</form></td>

   
</table>

     

            
       

</html>