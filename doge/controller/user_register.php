<?php
include("connectDB.php");


if(isset($_SESSION["Account"])){
	$Match=true;
}else if(isset($_POST["account"])){
	$account=$_POST["account"];
	$password=$_POST["password"];
	$repassword=$_POST["rePassword"];
	$name2=$_POST["name"];
	$birthday=$_POST["birthday"];
	$address=$_POST["address"];
	$petamount=$_POST["petamount"];
	$salary=$_POST["salary"];
	$sex=$_POST["sex"];
	$number = $_POST["phone"];
	 
	$age = date('Y', time()) - date('Y', strtotime($birthday)) - 1;  
	if(date('m', time()) == date('m', strtotime($birthday))){ 
		if(date('d', time()) > date('d', strtotime($birthday))) 
			$age++;  
	} 
	elseif(date('m', time()) > date('m', strtotime($birthday)))
		$age++;  
			
	$fileDir=".././user/";
	$fileResource=opendir($fileDir);
	$amount=0;
	$imageindir[]='';
		
	$match=true;
	
	
	//=======確認密碼========
	if($password != $repassword){
        header("location:../register.php?message=密碼不相同!");	
		$match=false;
	}
	
	//========防止同帳號========
	$sql_query="SELECT * FROM `user`";
	$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
	while($row_result=mysqli_fetch_assoc($result)){
		if($row_result["Account"]==$account){
			header("location:../register.php?message=已有此帳號!");
			$match=false;
		}
	}
	//========防電話格式========
	if(!preg_match("/^[0-9]{0,10}$/", $number))
	{
		$match=false;
		echo "<script>alert('電話格式不正確!');history.back()</script>";
	}
			
	//========上傳檔案=========
	$i=count($_FILES["image"]["name"]);
	$identify="";
	for($j=0;$j<$i;$j++){
		if(isset($_FILES["image"])){
			if($_FILES["image"]["size"][$j]>=3145728){
				$match=false;
				echo "<script>alert('你上傳的檔案大小已經超出範圍了!');history.back();</script>";
			}else if(!in_array(pathinfo($_FILES["image"]["size"][$j],PATHINFO_EXTENSION),array('jpeg','jpg','gif','png','bmp','iff','ilbm','tiff','tif','mng','xpm','psd','sai','psp','ufo','xcf','pcx','ppm','WebP','ico',''))){
				$match=false;
				echo "<script>alert(\"不能上傳非圖片檔\");history.back();</script>";		
			}else if($_FILES["image"]["error"][$j]==0){
				list($name,$extension)=explode(".",$_FILES["image"]["name"][$j]);
					
				$_FILES["image"]["name"][$j]=$account.$j.".".$extension;
				
				$identify=$identify.$_FILES["image"]["name"][$j].",";
			
				if(move_uploaded_file($_FILES["image"]["tmp_name"][$j],".././user/".$_FILES["image"]["name"][$j])){					
					echo "upload success";
				}
			}
		}
	}

	closedir($fileResource);
	
	if($match){
						
		$sql_query="INSERT INTO `user` (`ID`, `Name`, `Account`, `Password`, `Sex`, `Age`, `PetsAmount`, `Salary`, `Phone`, `Qualification`, `Mark`, `Identity`, `Permission`) VALUES (NULL, '$name2', '$account', '$password', '$sex', '$age', '$petamount', '$salary','$number', '0', 'None','$identify','是')";
		$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
				
		header("location:../register.php?message=註冊成功!");	
	}
}
?>