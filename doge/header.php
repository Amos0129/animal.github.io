<?php 
	session_start();
	include ('css\style.css');
?>
<nav>
         <label class="logo">浪我來養</label>
         <ul>
            <li><a class="active" href="index.php">首頁</a></li>
            <li>
               <a href="#">領養區
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="dog.php">◎ 找狗狗</a></li>
                  <li><a href="cat.php">◎ 找貓咪</a></li>
               </ul>
            </li>
            <li>
               <a href="#">常見Q＆A
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="qa.php">◎Q＆A</a></li>
                  <li><a href="rule.php">◎領養規則</a></li>
                  <li><a href="see.php">◎發現浪貓の處理辦法</a></li>
                  <li><a href="place.php">◎相關領養場域</a></li>
                  <li><a href="https://animal.coa.gov.tw/" target="_blank" >◎動保相關資訊</a></li> 
                </ul>
              </li>
            <li>
               <a href="#">帳號管理員
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="register.php">◎ 註冊</a></li>
                  <li><a href="login.php">◎ 登入</a></li>
               </ul>
            </li>
            

            
            <?php
				if(isset($_SESSION['Account'])){
					if(isset($_SESSION["admin"]))
						echo "<li><a href=\"controller/admin.php\">管理員</a></li>";
            		echo "您好!".$_SESSION['Account'];
					echo "<input type=\"button\" value=\"登出\" onclick=\"javascript:location.href='controller/logout.php'\" style=\"font-size:24px; font-family:'微軟正黑體'\" />";
					
				}
				else
					echo "<a href=\"login.php\">登入</a>";
			?>
         </ul>
      </nav>