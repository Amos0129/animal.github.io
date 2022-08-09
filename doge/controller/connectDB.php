<?php
$host="localhost";
$Account="root";
$password="";
$database="lost_animals";
$db_link=mysqli_connect($host,$Account,$password,$database);//設定資料庫連結，包括連結位置、帳號、密碼、資料庫名字
/*if(!$db_link){//確定資料庫連結是否成功
	echo "資料連結失敗";
}else{
	echo"資料連結成功";
}*/
?>