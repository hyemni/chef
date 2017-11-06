<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
		<link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<nav>
            <li><a href = "/chef/login/login.html"> Login </a></li>
            <li><a href = "/chef/login/signup.html"> SignUp </a></li>
            <li><a href = ""> Mypage </a></li>
            <li><a href = ""> Cart </a></li>
        </nav>

        <main>
            <aside>
                <div>
                    <a href="/chef/main/index1.html"><img src="https://github.com/hyemni/chef/blob/master/main/image/logo.png?raw=true" alt="CHEF - centre of Hanyang univ.ERICA foundation club"
                    width = 200px height = 100px /> </a>
                </div>

                <div class = "sidebar">
                    <ul>
                        <li>SHOPPING
                            <ul>
                                <li><a href = ""> by BRAND </a></li>
                                <ul>
                                    <li><a href = "">Wootique</a></li>
                                    <li><a href = "">Dalrang</a></li>
                                    <li><a href = "">Clothes1</a></li>
                                    <li><a href = "">Clothes2</a></li>
                                    <li><a href = "">Slime1</a></li>
                                    <li><a href = "">Slime2</a></li>
                                </ul>
                                <li><a href = ""> by PRODUCT </a></li>
                                <ul>
                                    <li><a href = "">Clothes</a></li>
                                    <li><a href = "">Jewelry</a></li>
                                    <li><a href = "">Slime</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li>COMMUNITY
                            <ul>
                                <li><a href = ""> Notice </a></li>
                                <li><a href = ""> Event </a></li>
                                <li><a href = ""> QnA </a></li>
                                <li><a href = ""> Review </a></li>
                                <li><a href = ""> Information </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
        </aside>

            <article>
                <div class = "slide">
                    <img src="https://github.com/hyemni/chef/blob/master/main/image/slide1.png?raw=true" alt="slide image" 
                    width = "1040px" height = "550px" />
                    <div class = "square">
                        <a href = "index1"> □ </a>
                        <a href = "index2"> □ </a>
                        <a href = "index3"> □ </a>   
                        <a href = "index4"> □ </a>        
                        <a href = "index5"> □ </a>                
                </div>

                <section>
                    <div>
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$findname = $_POST['findname'];
							$email = $_POST['email'];
						}
						$filename = file("id.txt");
						$check = TRUE;
						
						// 입력한 아이디와 등록된 아이디가 일치하는지, 해당 아이디에 따른 email 주소가 일치하는지 확인
						foreach ($filename as $info){
							$information = explode(";" , $info);
							if ($information[3] == $findname && $information[6] == $email){
								$check = FALSE;
							}
						}

						// 빈칸이 있는지 확인
						if (!isset($findname) || $findname=='' || !isset($email) || $email==''){
						?>
						<h1>Sorry</h1>
						<p>You didn't fill out the form completely. <a href="/login/findID.html">Try again?</a></p>
						
						<?php 	// 입력한 아이디와 등록된 아이디가 일치하는지, 해당 아이디에 따른 email 주소가 일치하는지 확인
						} else if ($check){
						?>
						<h1>Sorry</h1>
						<p>Check your Name and Email. <a href="/login/findID.html">Try again?</a></p>
						
						<?php
						} else {
						?>
						<ul> 
							<li>Name: <?= $findname ?></li>
							<li>E-mail: <?= $email ?></li>
						</ul>
						<?php
						}
						?>
					</div>
                </section>
            </article>
        </main>

        <footer>
            <div class = "phone">
                <div class = "footer_title"> CS center </div>
                <div id = "num">
                    1588-1588
                </div>
                <div id = "operating_hour">
                    상담시간 : 09:00 ~ 17:00 </br>
                    점심시간 : 12:00 ~ 13:00
                </div>
            </div>

            <div class = "bank">
                <div class = "footer_title"> BANK info </div>
                <div id = "account">
                    신한 110386389614 (주)셰프 </br>
                    기업 1111222233333 (주)셰프 </br>
                    국민 245656565555 (주)셰프
                </div>
            </div>

            <div class = "company">
                <div class = "footer_title"> 기업정보 </div>
                <div id = "com_info">
                    <ul>
                        <li>회사 : (주)셰프</li>
                        <li>대표 : 김웹앱</li>
                        <li>주소 : 경기도 안산시 상록구 사동 1271 한양대학교 제4공학관 SMaSH룸</li>
                        <li>사업자등록번호 : [101-11-22222]</li>
                        <li>통신판매업신고 : 제2017-경기안산-0285호 [ 사업자정보확인 ]</li>
                        <li>제휴/제안 : info@hanyang.ac.kr</li>
                    </ul>
                </div>
            </div>
        </footer>
		

	</body>
</html>