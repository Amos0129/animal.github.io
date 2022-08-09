<?php
include("connectDB.php");
session_start();
$match=false;

if(isset($_SESSION["Account"])){	
	$account=$_SESSION["Account"];
	
	$sql_query="SELECT * FROM `admin`";
	$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
	while($row_result=mysqli_fetch_assoc($result)){
		if($row_result["Account"]==$account){
			$match=true;
		}
	}	
}

if($match)
	header("location:../Admin/index.php");
else
	echo "<script>alert('退出成功!');history.back();</script>";
?>
