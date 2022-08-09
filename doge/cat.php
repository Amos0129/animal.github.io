<?php 
	include ('header.php');
	include ('css\style.css');
?>

<?php
	include("controller\connectDB.php");
	$count=0;
	
	$sql_query="SELECT * FROM `animals2`";
	$result=mysqli_query($db_link/*特定的資料庫連結*/,$sql_query/*打進去的指令*/);
	while($row_result=mysqli_fetch_row($result)){
		$path="pic\\".$row_result["9"];
		$count++;
		if($row_result["7"]==0)
		echo "
		<div class=\"allbox\">
			<div class=\"wrap\">
				<div class=\"box lg md\">
					<div class=\"contentBox\">
						<h1>貓貓$count</h1>
					</div>
					<div class=\"imgBox\">
						<img src=\"$path\" alt=\"\">
					</div>
					<div class=\"contentBox\">
							  <p>
							  ".$row_result["8"]."
							</p>
						<a href=\"petdetail.php?id=".$row_result["0"]."&table=animals2\" target=\"_blank\">認識我</a>
					</div>
				</div>
				";
	}	
?>
<!--
這裡是多行註解
這裡是多行註解
這裡是多行註解

<div class="allbox">
    <div class="wrap">
        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗1</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog1.jpg" alt="">
            </div>
            <div class="contentBox">
                      <p>
                    品種：混種狗<br>
                    類別：犬<br>
                    性別：母<br>
                    來源：板橋區</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=259187&AcceptNum=AAADG2022061101&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div>

        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗2</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog2.jpg" alt="">
            </div>
            <div class="contentBox">
                       <p>
                    品種：混種狗<br>
                    類別：犬<br>
                    性別：公<br>
                    來源：五股區</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=259199&AcceptNum=AAAHG1110611003&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div>


        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗3</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog3.jpg" alt="">
            </div>
            <div class="contentBox">
                       <p>
                    品種：柴犬<br>
                    類別：犬<br>
                    性別：母<br>
                    來源：楠梓區</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=258148&AcceptNum=LAAAG1110604G1&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div>


        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗4</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog4.jpg" alt="">
            </div>
            <div class="contentBox">
                       <p>
                    品種：混種狗<br>
                    類別：犬<br>
                    性別：公!<br>
                    來源：埔心鄉</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=258788&AcceptNum=GAAAG1110608014&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div>


        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗5</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog5.jpg" alt="">
            </div>
            <div class="contentBox">
                     <p>
                    品種：混種狗<br>
                    類別：犬<br>
                    性別：母<br>
                    來源：大樹區</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=259059&AcceptNum=LAAAG1110609Q1-1&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div>


        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗6</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog6.jpg" alt="">
            </div>
            <div class="contentBox">
                    <p>
                    品種：混種狗<br>
                    類別：犬<br>
                    性別：公<br>
                    來源：學甲區</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=257880&AcceptNum=S110601-14&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div>


        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗7</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog7.jpg" alt="">
            </div>
            <div class="contentBox">
                       <p>
                    品種：米格魯<br>
                    類別：犬<br>
                    性別：公<br>
                    來源：新屋區</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=258430&AcceptNum=CAAAG1110607002&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div>


        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗8</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog8.jpg" alt="">
            </div>
            <div class="contentBox">
                      <p>
                    品種：馬爾濟斯<br>
                    類別：犬<br>
                    性別：公<br>
                    來源：大寮區</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=259125&AcceptNum=LAAAG1110610G1&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div>


        <div class="box lg md">
            <div class="contentBox">
                <h1>狗狗9</h1>
            </div>
            <div class="imgBox">
                <img src="pic\pradog9.jpg" alt="">
            </div>
            <div class="contentBox">
                       <p>
                    品種：混種狗<br>
                    類別：犬<br>
                    性別：公<br>
                    來源：林園區</p>
                <a href="https://asms.coa.gov.tw/AmlApp/App/AnnounceList.aspx?Id=259052&AcceptNum=LAAAG1110610C4-2&PageType=Adopt" target="_blank">認識我</a>
            </div>
        </div> 
    </div>-->