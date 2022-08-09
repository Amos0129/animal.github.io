<?php 
	include ('header.php');
	include ('css\style.css');
	include("controller\connectDB.php");
	$count=0;
	$check=true;
	
	if(isset($_GET["table"])){
		$id=$_GET["id"];
		$table=$_GET["table"];	
		$sql_query="SELECT * FROM `$table`";
		$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
		
		while($row_result=mysqli_fetch_row($result)){
			if($id==$row_result["0"]){
				$path="pic\\".$row_result["9"];
				echo "
				<div class=\"allbox\">
					<div class=\"wrap\">
						<div class=\"box lg md\">
						<table>
						<tr>
						<td>
							<div class=\"imgBox\">
								<img src=\"$path\" alt=\"\">
							</div>
						</td>
						<td style=\"padding:100px\";>
							<div style=\"width=\"250px\"\">
									  <p>
									  ".$row_result["8"]."
									</p>";
									
				if(isset($_SESSION["Account"])){
					$sql_query="SELECT * FROM `user`";
					$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
					while($row_result=mysqli_fetch_assoc($result)){
						if($row_result["Qualification"]==0&&$row_result["Account"]==$_SESSION["Account"]){
							$check=false;
						}
					} 
					if($check){
						echo "<a href=\"controller\adobt_apply.php?id=$id&table=$table\"\">領養我</a><br>";		
					}else{
						echo "<a href=\"\"\">尚未審核成功 ! 還無法領養 !</a><br>";	
					}
				}
				else{
					echo "<a href=\"login.php\">請登入</a><br>";
				}
				echo "
							</div>
						</div>
						</td>
						</tr>
						</table>
						";
			}
		}	
	}
	?>