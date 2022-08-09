<?php
	include("connectDB.php");
	
	$fileDir="../.././pic/";
	$fileResource=opendir($fileDir);
	$amount=0;
	$imageindir[]='';
	
	if(isset($_POST["name"])){
		$sort=$_POST["sort"];
		$Name=$_POST["name"];
		$birthday=$_POST["birthday"];
		$finddate=$_POST["finddate"];
		$sex=$_POST["sex"];
		$lost=$_POST["lost"];	
		$describe=$_POST["describe"];
		
		$age = date('Y', time()) - date('Y', strtotime($birthday)) - 1;  
	if(date('m', time()) == date('m', strtotime($birthday))){ 
		if(date('d', time()) > date('d', strtotime($birthday))) 
			$age++;  
	} 
	elseif(date('m', time()) > date('m', strtotime($birthday)))
		$age++;  
	}
						
	if(isset($_FILES["image"])){
		while($fileList=readdir($fileResource)){
			if(is_file($fileDir.'\\'.$fileList)){
				list($ImageName,$ImageExtension)=explode(".",$fileList);
				if(in_array($ImageExtension,array('jpeg','jpg','gif','png','bmp','iff','ilbm','tiff','tif','mng','xpm','psd','sai','psp','ufo','xcf','pcx','ppm','WebP','ico',''))){
					$imageindir[]= $fileList;
				}
			}
		}
		
		if($_FILES["image"]["size"]>=3145728){
			echo "<script>alert('你上傳的檔案大小已經超出範圍了!');history.back();</script>";
		}else if(!in_array(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION),array('jpeg','jpg','gif','png','bmp','iff','ilbm','tiff','tif','mng','xpm','psd','sai','psp','ufo','xcf','pcx','ppm','WebP','ico',''))){
			echo "<script>alert(\"不能上傳非圖片檔\");history.back();</script>";		
		}else if($_FILES["image"]["error"]==0){
			$amount="";
			list($name,$extension)=explode(".",$_FILES["image"]["name"]);
			while(in_array($name.$amount.".".$extension,$imageindir)){
					$amount++;
			}
				
			$_FILES["image"]["name"]=$name.$amount.".".$extension;
				
							
			if(move_uploaded_file($_FILES["image"]["tmp_name"],$fileDir.$_FILES["image"]["name"])){
				switch ($sort)
				{
					case 0:
					  $table="animals";
					  break;  
					case 1:
					  $table="animals2";;
					  break;
					default:
					  $table="";
				}
									
				$sql_query="INSERT INTO `$table` (`ID`, `Name`, `Sex`, `Age`, `Birthday`, `Find_Date`, `Lost`, `Adobted`, `Mark`, `Pic`) VALUES (NULL, '$Name', '$sex', '$age', '$birthday', '$finddate', '$lost', '0', '$describe', '".$_FILES["image"]["name"]."')";	
				$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
				echo "<script>alert('新增成功!');history.back();</script>";			
			}else{
				echo "<script>alert('Failure Upload!');history.back();</script>";
			}
		}
	}

	closedir($fileResource);