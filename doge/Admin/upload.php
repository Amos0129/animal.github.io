<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊帳號</title>
    <style>
	body{ margin:0 auto; }
	</style>
</head>
<body>
<?php
include("controller/connectDB.php");
include("header.php");
?>
	<form action="controller/upload.php" method="post" name="register" id="register" enctype="multipart/form-data" style="margin: auto;text-align: left; width:min-content;">
    <table width="400px">
    <tr ><td style="text-align:right">
    類別:
    </td>
    <td>
    <select name="sort" >
       <option value="0">狗</option>
       <option value="1">貓</option>
       <option value="2">馬</option>
       <option value="3">天竺鼠</option>
       <option value="4">老鼠?</option>
	</select>
   	</td>
    </tr>

    <tr><td style="text-align:right" width="150px">寵物圖片* :</td>
    <td><input type="file" name="image" accept="image/*" required /></td> </tr>
    <tr><td style="text-align:right">寵物名稱* :</td>
    <td><input type="text" name="name" id="name" maxlength="20" autofocus required /> </td></tr>
    <tr><td style="text-align:right"><p>
        <label for="textfield">　　出生年月日:</label></td>
        <td><input type="date" name="birthday" id="birthday" required></td>
    </p> 
    <td></tr>
    <tr><td style="text-align:right"><p>
        <label for="textfield">　　發現日期:</label></td>
        <td><input type="date" name="finddate" id="finddate" required></td>
    </p> </tr>
    <tr><td style="text-align:right"><p>
        <label for="textfield">　　性別:</label></td>
        <td><input name="sex" type="radio" id="sex1" value="M" checked> 公
		<input name="sex" type="radio" id="sex2" value="F" > 母<br></td>
    </p> </tr>
    <tr><td style="text-align:right"><p>
        <label for="textfield">　　是否為走失?:</label></td>
        <td><input name="lost" type="radio" id="lost1" value="Y" checked> 是
		<input name="lost" type="radio" id="lost2" value="N" > 否<br></td>
    </p> </tr>
    <tr><td style="text-align:right">描述 :</td>
    <td>
    <textarea name="describe" cols="40" rows="8" id="describe" style="resize:none"></textarea>
    </td> 
    </tr>
    <tr><td></td><td><input type="submit" value="新增" style="font-size:20px; font-family:'微軟正黑體'" />
    <input type="reset" value="重置" style="font-size:20px; font-family:'微軟正黑體'" />
    </td> </tr>
	</table>
    </form>
    
    <!----------------------顯示部分------------------------>
	<div style="margin: auto; overflow:auto; text-align:center ">
	<table border="1" style="overflow:auto"   class="table  table-striped">
	<?php
	$i=0;
	$column=array("ID","Name","Sex","Age","Birthday","Find_Date","Lost","Adobed","Mark","Pic","Operation");
	echo "<tr>";
	for($i;$i<sizeof($column)-1;$i++){
		echo "<td>".$column[$i]."</td>";
	}
	echo "<td colspan=\"3\">".$column[sizeof($column)-1]."</td>";
	echo "</tr>";
	?>
    
    <?php
	
	$petstable=array("animals","animals2");
	foreach($petstable as $table){
		echo "<tr><td colspan=\"13\">$table</td></tr>";
		$sql_query="SELECT * FROM `$table`";
		$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
		while($row_result=mysqli_fetch_row($result)){
			echo "<tr>";
			for($i=0;$i<sizeof($row_result);$i++)
				echo "<td>".$row_result[$i]."</td>";
			
			$imgs=explode(",",$row_result["9"]);
			
			echo "<td>";
			foreach($imgs as $img){
				$path="..\pic\\".$img;
				//echo $path;
				echo "<img src=\"$path\" alt=\"\" width=\"100px\">";
			}
			echo "</td>";
			
				
			echo "<td><input type=\"button\" value=\"刪除\" onclick=\"javascript:location.href='controller/checkpet.php?id=$row_result[0]&table=$table&func=0'\" style=\"font-size:24px; font-family:'微軟正黑體'\" /></td>";
			
			echo "<td><input type=\"button\" value=\"標記已領養\" onclick=\"javascript:location.href='controller/checkpet.php?id=$row_result[0]&table=$table&func=1'\" style=\"font-size:24px; font-family:'微軟正黑體'\" /></td>";
			echo "</tr>";
		}
	}
	?>
    </table>
</div>
<?php
include("footer.php");
?>
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