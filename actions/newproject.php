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
 
  

  

    <td width="200" valign="top">     ADD PROJECT </br>
            <form action="/onioncms/actions/insert.php" method="post">
            Title </br><input style="width:300px" type="text" name="Title" /></br>
            Details </br>
<textarea style="width:400px;" name="Content" id="Content" rows="5" columns="65"> </textarea>
</br>
Tags(separate by commas):</br> <input style="width:300px;" type="text" name="Tags" id="Tags" /></br>


assigned to</br> <input type="text" name="assigned" id="assigned" /></br>

status </br>
<input type="radio" name="status" value="planned">planned<br>
<input type="radio" name="status" value="open">open</br>
<input type="submit" />

</form></td>

   
</table>

     

            
       

</html>