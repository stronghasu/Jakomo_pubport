<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <?php include_once "inc/default.php";?>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/mainjs.js"></script>
</head>
<body>
    <?php include_once "inc/header.php";?>
    <div class="clear">
        <div class="sub-login">
            <div class="center">
                <h1>LOGIN</h1>
                <form action="php/login_process.php" method="post">
                    <div class="id"><span>아이디</span><input name="id" required type="text" minlength="1"> </div>
                    <div class="pass"><span>비밀번호</span><input name="pass" required type="password" minlength="1"> </div>
                    <input type="submit" value="로그인" class="submit">
                </form>
                <div class="sub-login-menu clear">
                    <div class="find">
                        <a href="#">아이디찾기</a>
                        <a href="#">비밀번호찾기</a>
                    </div>
                    <div class="register"><a href="register.php">회원가입</a></div>
                </div>
                <div class="other-login">
                    <h5>다른 계정으로 간편 로그인 하기</h5>
                    <div>
                        <a href="https://www.google.co.kr/" class="clear">
                            <div class="login-logo"></div>
                            <p><span>구글</span> 계정으로 로그인</p>                   
                        </a>
                        <a href="https://www.naver.com/"class="clear">
                            <div class="login-logo"></div>
                            <p><span>네이버</span> 계정으로 로그인</p>
                        </a>
                        <a href="#" class="clear">
                            <div class="login-logo"></div>
                            <p><span>카카오</span>계정으로 로그인</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "inc/footer.php";?>
</body>
</html>