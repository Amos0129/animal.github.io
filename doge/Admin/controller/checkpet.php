<?php
include("connectDB.php");


if(isset($_GET["id"])){
	$id=$_GET["id"];
	$table=$_GET["table"];
	$func=$_GET["func"];
	
	switch($func)
	{
		case 0:
		{
			$sql_query="DELETE FROM `$table` WHERE `$table`.`ID` = $id;";
			$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
		
			echo "<script>alert('刪除成功!');location.href='../upload.php'</script>";
			break;
		}
		
		case 1:
		{
			$sql_query="UPDATE `$table` SET `Adobted` = '1' WHERE `$table`.`ID` = $id;";
			$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
		
			echo "<script>alert('核准成功!');location.href='../upload.php'</script>";
		}
	}
}
?>