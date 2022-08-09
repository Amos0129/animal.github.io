<?php
include("connectDB.php");
session_start();

if(isset($_SESSION["Account"])){
	$match=true;
}else if(isset($_POST["Account"])){
	$MemberName=$_POST["Account"];
	$MemberAccount=$_POST["Account"];
	$MemberPassword=$_POST["Password"];
	
	
	$sql_query="SELECT * FROM `user`";
	$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
	while($row_result=mysqli_fetch_assoc($result)){
		if($row_result["Account"]==$MemberAccount&&$row_result["Password"]==$MemberPassword){
			$_SESSION["Account"]=$MemberAccount;
			$_SESSION["ID"]=$row_result["ID"];
			$sql_query="SELECT * FROM `admin` WHERE Account='".$_SESSION["Account"]."'";
			$result2=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
			$nums=mysqli_num_rows($result2);
			if($nums > 0)
				$_SESSION["admin"]=true;
				
			$match=true;
		}
	}	
	if($match)
		header("location:../index.php");
	else
		header("location:../login.php?request=Wrong");
}
?>