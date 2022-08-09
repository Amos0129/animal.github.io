<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊帳號</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php
include("header.php");
?>  
<div style="padding-left:800px; padding-top:150px;" >
<form  action="controller/user_register.php" method="post" name="register" id="register" enctype="multipart/form-data" >
    <p>
        <label for="textfield">本名:</label>
        <input type="text" name="name" id="name" autofocus required>
    </p>
    <p>
        <label for="textfield">出生年月日:</label>
        <input type="date" name="birthday" id="birthday" required>
    </p>
    <p>
        <label for="textfield">性別:</label>
        <input name="sex" type="radio" id="sex1" value="M" checked> 男性
		<input name="sex" type="radio" id="sex2" value="F" > 女性<br>
    </p>
    <p>
        <label for="textfield">住址:</label>
        <input type="text" name="address" id="address" required>
    </p>
    <p>
        <label for="textfield">已養寵物數量:</label>
        <input type="number" name="petamount" id="petamount" min="0" required>
    </p>
    <p>
        <label for="textfield">月薪:</label>
        <input type="number" name="salary" id="salary" min="0" required>
    </p>
     <p>
        <label for="textfield">電話:</label>
        <input type="tel" name="phone" id="phone" required>
    </p>
    <p>
        <label for="textfield">帳號:</label>
        <input type="text" name="account" id="account" required maxlength="20" minlength="8" size="25">
    </p>
    <p>
        <label for="textfield">密碼:</label>
        <input type="password" name="password" id="password" minlength="8" maxlength="20" size="25">
    </p>
    <p>
        <label for="textfield">密碼確認:</label>
        <input type="password" name="rePassword" id="rePassword" minlength="8" maxlength="20" size="25">
    </p>

    <p>
    身分證圖片* :
    <input type="file" name="image[]" accept="image/*" multiple required /><br /><br />
    </p>
    
    <p style="padding-left:120px; padding-top:20px;">
        <input type="submit" style="width:100px;height:50px;" name="submit" id="submit" value="註冊">
    </p>

    </form>
</div>  
    
</body>
</html>
<?php
	if(isset($_GET['account'])){
		$account = $_GET['account'];
    	$password = $_GET['password'];
    	$rePassword = $_GET['rePassword'];
	}

    if(isset($_GET['message']))
		echo $_GET['message'];

?>