<?php
include("connectDB.php");


if(isset($_GET["id"])){
	$id=$_GET["id"];
	$func=$_GET["func"];
	$table=$_GET["table"];
	
	switch($func)
	{
		case 0://====刪除====
		{
			$sql_query="DELETE FROM `user` WHERE `user`.`ID` = $id;";
			$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
		
			echo "<script>alert('刪除成功!');location.href='../user.php'</script>";
			break;	
		}
		case 1://====核准====
		{
			$sql_query="UPDATE `user` SET `Qualification` = '1' WHERE `user`.`ID` = $id;";
			$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
		
			echo "<script>alert('核准成功!');location.href='../user.php'</script>";
			break;
		}
		case 2://====停權====
		{
			$sql_query="UPDATE `user` SET `Permission` = '".$_GET["permission"]."' WHERE `user`.`ID` = $id;";
			$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
		
			echo "<script>alert('權限修改成功!');location.href='../user.php'</script>";
			break;	
		}
	}

}

?>