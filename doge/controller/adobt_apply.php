<?php
session_start();
include("connectDB.php");

if(isset($_SESSION["Account"])&&isset($_GET["id"])){	
	$userID=$_SESSION["ID"];	
	$petID=$_GET["id"];	
	$table=$_GET["table"];		
	$time= date("Y-m-d H:i:s");
	$sql_query="SELECT * FROM `$table` WHERE `ID` = $petID AND `Adobted` = 0" ;
	$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
	$nums=mysqli_num_rows($result);
    if($nums > 0){
	
		$sql_query="INSERT INTO `applicationform` (`ID`, `userID`, `petID`, `Sendtime`) VALUES (NULL, '$userID', '$petID', '$time')";
		$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
					
		echo "<script>alert('申請成功!');location.href='../index.php'</script>";
    }
	else{
		echo "<script>alert('動物已經被領養走了!');location.href='../index.php'</script>";	
	}
}
?>