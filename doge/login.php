<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php 
	include ('header.php');
	if(isset($_SESSION["Account"]))
  		echo "<script>history.back();</script>";

?>

<?php include('css\style.css');?>
    </head>
    <body>
    
     
  <div class="form-group">
  <form action="controller/user_login.php" method="post">
  <div align="center">
  <br /><br /><br />
  帳號 :
  <input type="text" name="Account" id="Account" /><br /><br />
    密碼 :
  <input type="password" name="Password" id="Password" /><br /><br />
  <input type="submit" value="登入" style="font-size:24px; font-family:'微軟正黑體'" />
  <input type="button" value="註冊" onclick="javascript:location.href='Register.php'" style="font-size:24px; font-family:'微軟正黑體'" /><br /><br />
  </div>
  
  <?php	
  if(isset($_GET["request"]))
  	echo "<script>alert(\"你輸入的帳號或密碼不正確，請重新輸入\")</script>";
  ?>

</form>
     </div> 
      
    <?php
	include('footer.php');
	?>

      
   </body>
</html>