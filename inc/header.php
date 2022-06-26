<div id="header">
        <div class="center clear">
            <h1 class="logo"><a href="index.php"><img src="./img/main/logo.png"></a></h1>
            <ul class="h-menu clear">
                <li>
                    <a href="sub1.php">브랜드스토리</a>
                    <ul class="depth2">
                        <li><a href="sub1.php">회사소개</a></li>
                        <li><a href="#">C.I</a></li>
                        <li><a href="#">HISTORY</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sub2.php">제품소개</a>
                    <ul class="depth2">
                        <li><a href="sub2.php">침실</a></li>
                        <li><a href="#">거실</a></li>
                        <li><a href="#">주니어</a></li>
                        <li><a href="#">주방</a></li>
                    </ul>
                </li>
                <li>
                    <a href="reiew.php">커뮤니티</a>
                    <ul class="depth2">
                        <li><a href="reiew.php">고객리뷰</a></li>
                        <li><a href="#">공지사항</a></li>                    
                    </ul>
                </li>
                <li>
                    <a href="event.php">이벤트</a>
                    <ul class="depth2">
                        <li><a href="event.php">쿠폰</a></li>
                        <li><a href="event.php">진행중인이벤트</a></li>
                        <li><a href="#">당첨자발표</a></li>                    
                    </ul>
                </li>
                <li>
                    <a href="#">고객지원</a>
                    <ul class="depth2">
                        <li><a href="#">교환환불</a></li>
                        <li><a href="#">1:1문의</a></li>
                        <li><a href="#">상품문의</a></li>      
                        <li><a href="#">자주찾는질문</a></li>                      
                    </ul>
                </li>
                <li><a href="#">매장안내</a></li>
            </ul>
            <div class="h-menu-right clear">
                <ul class="login clear">
                    <li><a href="#"><img src="img/main/h-icon1.svg">장바구니</a></li>
                             <!-- 로그인안됐으면 로그아웃 -->
                    <?php 
                        if(isset($_SESSION['userid']))
                        {
                    ?>
                    <li class="userid"><a href="#"><?php echo $_SESSION['userid']?>님</a></li>
                    <li class="logout"><a href="php/logout.php">로그아웃</a><li>
                    <?php } else { ?>
                    <li><a href="login.php"><img src="img/main/h-icon2.svg">로그인</a></li>              
                    <li><a href="register.php"><img src="img/main/h-icon3.svg">회원가입</a></li>
                    <?php }?>
                </ul>
            </div>
            <!-- 여기부터 모바일 메뉴 -->
            <div class="m-header-btn clear">
                <a href="#" class="m-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </a> 
            <div class="m-h-menu-all">  
                    <a href="#" class="m-header-closebtn"><i class="fas fa-times"></i></a>
                    <ul class="m-h-menu clear">
                        <li>
                            <a href="#">브랜드스토리</a>
                            <ul class="m-depth2">
                                <li><a href="sub1.php">회사소개</a></li>
                                <li><a href="#">C.I</a></li>
                                <li><a href="#">HISTORY</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">제품소개</a>
                            <ul class="m-depth2">
                                <li><a href="sub2.php">침실</a></li>
                                <li><a href="#">거실</a></li>
                                <li><a href="#">주니어</a></li>
                                <li><a href="#">주방</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">커뮤니티</a>
                            <ul class="m-depth2">
                                <li><a href="reiew.php">고객리뷰</a></li>
                                <li><a href="#">공지사항</a></li>                    
                            </ul>
                        </li>
                        <li>
                            <a href="#">이벤트</a>
                            <ul class="m-depth2">
                                <li><a href="event.php">쿠폰</a></li>
                                <li><a href="event.php">진행중인이벤트</a></li>
                                <li><a href="#">당첨자발표</a></li>                    
                            </ul>
                        </li>
                        <li>
                            <a href="#">고객지원</a>
                            <ul class="m-depth2">
                                <li><a href="#">교환환불</a></li>
                                <li><a href="#">1:1문의</a></li>
                                <li><a href="#">상품문의</a></li>      
                                <li><a href="#">자주찾는질문</a></li>                      
                            </ul>
                        </li>
                        <li><a href="#">매장안내</a></li>
                    </ul>
                    <div class="m-h-menu-login clear">
                        <ul class="m-login clear">
                            <li><a href="#"><img src="img/main/h-icon1.svg">장바구니</a></li>
                                    <!-- 로그인안됐으면 로그아웃 -->
                            <?php 
                                if(isset($_SESSION['userid']))
                                {
                            ?>
                            <li class="m-userid"><a href="#"><?php echo $_SESSION['userid']?>님</a></li>
                            <li class="m-logout"><a href="php/logout.php">로그아웃</a><li>
                            <?php } else { ?>
                            <li><a href="login.php"><img src="img/main/h-icon2.svg">로그인</a></li>              
                            <li><a href="register.php"><img src="img/main/h-icon3.svg">회원가입</a></li>
                            <?php }?>
                        </ul>
                    </div>  
                </div>           
            </div>
        </div>
    </div>