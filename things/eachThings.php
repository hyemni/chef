<!--상품 설명 페이지-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CHEF</title>
        <link href="/chef/main/favicon.png" type="image/png" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/things/things.css" type="text/css" rel="stylesheet"> <!-- 임시 css파일 -->
        <script src="ThingFunc.js" type="text/javascript"></script>
        <script src="http://malsup.github.com/jquary.cycle2.js"></script>
    </head>

    <body>
        <main>
            <nav>
                <div>
                    <ul>
                        <li><a href="/chef/main/index1.html" id="mainpage">CHEF</a></li>
                        <li><a href="/chef/main/index1.html">HOME</a></li>
                        <li><a href="#">SHOP</a>
                            <ul class="submenu">
                                <li><a href="brand.php?brand=wootique">by Brand</a>
                                    <ul>
                                        <li><a href = "brand.php?brand=wootique">Wootique</a></li>
                                        <li><a href = "brand.php?brand=dallrang">Dallrang</a></li>
                                        <li><a href = "brand.php?brand=veneno">veneno</a></li>
                                        <li><a href = "brand.php?brand=joy">joy</a></li>
                                        <li><a href = "brand.php?brand=ringing">ringing</a></li>
                                        <li><a href = "brand.php?brand=wingbling">wingbling</a></li>
                                        <li><a href = "brand.php?brand=slime1">Slime1</a></li>
                                        <li><a href = "brand.php?brand=slime2">Slime2</a></li>
                                        <li><a href = "brand.php?brand=slime3">Slime3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">by Product</a>
                                    <ul>
                                        <li><a href="/chef/things/things.html">Clothes</a></li>
                                        <li><a href="/chef/things/things.html">Jewelry</a></li>
                                        <li><a href="#">Slime</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">CUSTOMER CARE</a></li>
                                <li><a href="/chef/mypage/mypage.php">MY PAGE</a></li>
                                <li><a href="/chef/login/login.php">Sign In</a></li>
                            </ul>
                        </li>
                        <!-- <li>COMMUNITY
                            <ul>
                                <li class="mincate"><a href = "/chef/board/notice.html"> Notice </a></li>
                                <li class="mincate"><a href = "/chef/board/event.html"> Event </a></li>
                                <li class="mincate"><a href = "/chef/board/qna.html"> QnA </a></li>
                                <li class="mincate"><a href = "/chef/board/info.html"> Information </a></li>
                            </ul>
                        </li> -->
                        <li><a href="#">CUSTOMER CARE</a></li>
                        <li><a href="/chef/mypage/mypage.html">MY PAGE</a></li>
                        <li><a href="/chef/login/login.php">Sign In</a></li>
                    </ul>
                </div>
            </nav>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- /things/eachThings.php?brand=***&productName=***
dallrang, veneno, joy만 이미지가 있나봄..-->

            <?php
                $brand = $_GET["brand"];
                $productName = $_GET["productName"];

                $db = new PDO("mysql:dbname=CHEF;host=localhost", "root", "root");
                $info = $db -> query("SELECT * FROM product WHERE brand = '$brand' AND name='$productName'");
            ?>


            <article>
            <?php
            if ($brand == 'dallrang') { ?>
                <div class = "slide">
                    <img src="/chef/imageSlider/img/dallrang.jpg" alt="slide image"
                    width = "1040px" height = "550px" />
                </div>
            <?php } ?>
            <?php
            elseif ($brand == 'veneno') { ?>
                <div class = "slide">
                    <img src="/chef/imageSlider/img/veneno.jpg" alt="slide image"
                    width = "1040px" height = "550px" />
                </div>
            <?php } ?>
            <?php
            elseif ($brand == 'joy') { ?>
                <div class = "slide">
                    <img src="/chef/imageSlider/img/joy.jpg" alt="slide image"
                    width = "1040px" height = "550px" />
                </div>
            <?php } ?>
            <?php
            else { ?>
                <div class = "slide">
                    <img src="https://github.com/hyemni/chef/blob/master/main/image/slide1.png?raw=true" alt="slide image"
                    width = "1040px" height = "550px" />
                </div>
            <?php } ?>


                <h1>제품 설명</h1>
                <div class="picture">
                    <img src="/chef/image/<?= $brand ?>/<?= $productName ?>.png" alt="ring">
                </div>


                <div class="one_two"> <!--귀걸이 상품들 정보를 모아 데이터베이스를 이용해서 불러와야 할 것 같음  -->
                    <h2><?= $info["name"] ?></h2>
                    <hr/>
                    <ul>
                        <li>판매가</li>
                        <li>배송비</li>
                    </ul>
                    <ul>
                        <li><?= $info["price"] ?></li>
                        <li>2,500</li>
                    </ul>
                    <form class="input">
                        <ul>
                            <li>주문 수량  <!--form으로 받게 해야할거같음-->
                                <select name="number">    <!--아직 form으로 숫자를 받아서 저장하는법을 몰라서 1~5중에서 선택하게 만들었음-->
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </li>
                            <!--form부분-->
                            <li>소재 <!--근데 이건 form 사용해서 은이랑 금이랑 무니켈 사용선택할수 있게 해야할거같음-->
                            <!--form부분-->
                                <select name="ringoption">
                                    <option>골드</option>
                                    <option>실버</option>
                                    <option>무니켈</option>
                                </select>
                            </li>
                            <!--주문하기 버튼을 눌렀을때 위에 변수 number와 ringoption을 데이터형식으로 저장할 수 있게 내보내는 방법을 찾아야 함ㅠ
                            <input type="submit" name="put" value="주문하기" /> -->
                        </ul>
                    </form>


                    <p>&#35; 최소주문수량 1개 이상</p>
                    <p>&#35; 최대주문수량 5개 이하</p>
                    <p>&#35; 옵션선택 박스를 선택하시면 아래에 상품이 추가됩니다.</p>

                    <p>총 상품금액</p>
                    <!--이 부분도 php로 하는건가?-->

                    <div>
                        <!-- <p><a href="">구매하기</a></p>
                        <p><a href="">장바구니</a></p> -->
                        <form action="">
                            <button id="buy" type="button" name="buy">구매하기</button>
                            <button id="pocket" type="button" name="pocket">장바구니</button>
                        </form>
                    </div>
                </div>
            </article>
            <section>
                <hr/>

                <div class="button">
                    <p><a href="">상세정보</a></p>
                    <p><a href="/chef/things/things_blog.html">제품후기</a></p>
                </div>

                <hr/>

                <div class="thing_information"> <!--상세 정보-->
                    <h3>comment</h3>
                    <p>가볍고 분위기 있는 드롭 디자인의 이어링.</p>
                    <p>원형과 드롭 스틱에 어우러진 체인 추가</p>
                    <img src="/chef/image/wootique/details/체인스틱2.png" alt="ChainStick">
                    <p>알맞게 떨어지는 체인드롭이 매우 분위기 있습니다.</p>
                    <img src="/chef/image/wootique/details/체인스틱착샷.png" alt="">
                    <p>유니크한 디자인에 깔끔하여 자꾸 눈이 가는 이어링이예요.</p>
                    <p>평소에 가벼운 드롭 스타일을 찾으셨다면, 정말 추천드립니다.</p>
                </div>

                <!--<div class="thing_blog"> 제품 후기

                </div>-->

            </section>
        </main>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

        <footer>
            <ul>
                <li>CS CENTER</li>
                <li>1588-1588</li>
                <li>상담시간 : 09:00 ~ 17:00</li>
                <li>점심시간 : 12:00 ~ 13:00 </li>
            </ul>
            <ul>
                <li>BANK INFO</li>
                <li>신한 110386389614 (주)셰프</li>
                <li>기업 1111222233333 (주)셰프</li>
                <li>국민 245656565555 (주)셰프</li>
            </ul>
            <ul>
                <li>OUR STORE</li>
                <li>회사 : (주)셰프</li>
                <li>대표 : 김웹앱</li>
                <li>주소 : 경기도 안산시 상록구 사동 1271 </br>
                    한양대학교 제4공학관 SMaSH룸</li>
                <li>제휴/제안 : info@hanyang.ac.kr</li>
            </ul>
        </footer>
    </body>
</html>