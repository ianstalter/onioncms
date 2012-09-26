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
 
  

  

    <td width="200" valign="top">     ADD COMMENT </br>
            <form action="/onioncms/actions/inserttaskcomment.php<?php echo "/?taskid=" . "$_GET[taskid]"?>" method="post">
            Comment </br>
<textarea style="width:400px;" name="comment" id="comment" rows="5" columns="65"> </textarea>
</br>
<input type="submit" />

</form></td>

   
</table>

     

            
       

</html>