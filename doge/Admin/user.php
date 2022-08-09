<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<head>
<style>
.coolscrollbar{scrollbar-arrow-color:yellow;scrollbar-base-color:lightsalmon;}
</style>
    </head>
    <body>
		
    <?php 
	include("controller/connectDB.php");
	include ('header.php');
	?>

	<div>
	<table border="3" width="100%" class="table table-hover">
	<?php
	$i=0;
	$column=array("ID","Name","Account","Password","Sex","Age","PetsAmount","Salary","Phone","Qualification","Mark","Identity","Permission","Identity_img","Operation");
	echo "<tr>";
	for($i;$i<sizeof($column)-1;$i++){
		echo "<td>".$column[$i]."</td>";
	}
	echo "<td colspan=\"3\">".$column[sizeof($column)-1]."</td>";
	echo "</tr>";
	?>
    
    <?php
	
	
	$sql_query="SELECT * FROM `user`";
	$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
	while($row_result=mysqli_fetch_row($result)){
		echo "<tr>";
		for($i=0;$i<sizeof($row_result);$i++)
			echo "<td>".$row_result[$i]."</td>";
		
		$imgs=explode(",",$row_result["11"]);
		
		echo "<td>";
		foreach($imgs as $img){
			$path="..\user\\".$img;
			//echo $path;
			echo "<img src=\"$path\" alt=\"\" width=\"180px\">";
		}
		echo "</td>";
		
			
		echo "<td><input type=\"button\" value=\"刪除\" onclick=\"javascript:location.href='controller/checkuser.php?id=$row_result[0]&func=0'\" style=\"font-size:24px; font-family:'微軟正黑體'\" /></td>";
		
		echo "<td><input type=\"button\" value=\"核准\" onclick=\"javascript:location.href='controller/checkuser.php?id=$row_result[0]&func=1'\" style=\"font-size:24px; font-family:'微軟正黑體'\" /></td>";
		
		if($row_result["11"]=="是")
			echo "<td><input type=\"button\" value=\"停用\" onclick=\"javascript:location.href='controller/checkuser.php?id=$row_result[0]&func=2&permission=否'\" style=\"font-size:24px; font-family:'微軟正黑體'\" /></td>";
		else
			echo "<td><input type=\"button\" value=\"啟用\" onclick=\"javascript:location.href='controller/checkuser.php?id=$row_result[0]&func=2&permission=是'\" style=\"font-size:24px; font-family:'微軟正黑體'\" /></td>";
		echo "</tr>";
	}
	?>
    </table>
    </div>


      
   </body>
</html>