<?php include "inc/db_connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>  
    <?php include_once "inc/default.php";?>
    <?php include_once "php/address_process.php";?>
    <link rel="stylesheet" href="css/register.css">   
    <script src="js/mainjs.js"></script>
</head>
<body>
    <?php include_once "inc/header.php";?>
    <div class="register">
        <div class="center">
            <h1>회원가입</h1>
            <form action="php/register_process.php" method="post">
                <div class="check1">
                    <p>이용약관</p>
                    <p class="agree">제 1조 (목적)</br>
                    본 약관은 JAKOMO 사이트(이하 "당 사이트")가 제공하는 모든 서비스(이하 "서비스")의 이용조건 및 절차, 이용자와 당 사이트의 권리, 의무, 책임사항과 기타 필요한 사항을 규정함을 목적으로 합니다.</br>
                    제 2조 (약관의 명시와 개정)</br>
                    1. 당 사이트는 이 약관의 내용과 주소지, 관리자의 성명, 개인정보 보호책임자의 성명, 연락처(전화, 팩스, 전자우편 주소 등) 등을 이용자가 알 수 있도록 당 사이트의 초기 서비스화면(전면)에 게시합니다.</br>
                    2. 당 사이트는 약관의 규제에 관한 법률, 전자거래기본법, 전자서명법, 개인정보보호법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.</br>
                    3. 당 사이트가 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 당 사이트의 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다.
                    당 사이트는 이용자가 본 약관 내용에 동의하는 것을 조건으로 이용자에게 서비스를 제공할 것이며, 이용자가 본 약관의 내용에 동의하는 경우, 당 사이트의 서비스 제공 행위 및 이용자의 서비스 사용 행위에는 본 약관이 우선적으로 적용될 것입니다.</br>
                    4.이 약관에 동의하는 것은 정기적으로 웹을 방문하여 약관의 변경사항을 확인하는 것에 동의함을 의미합니다. 변경된 약관에 대한 정보를 알지 못해 발생하는 이용자의 피해는 당 사이트에서 책임지지 않습니다. </br>
                    5.본 약관에 명시되지 않은 사항은 전기통신기본법, 전기통신사업법, 방송통신심의위원회 정보통신에 관한 심의규정, 저작권법 및 기타 관련 법령의 규정에 의합니다.</br>
                    제 3조 (용어의 정의)</br>
                    본 약관에서 사용하는 용어의 정의는 다음과 같습니다.</br>
                    1.이용자 : 본 약관에 따라 당 사이트가 제공하는 서비스를 받는 자.</br>
                    2.이용계약 : 서비스 이용과 관련하여 당 사이트와 이용자 간에 체결하는 계약을 말합니다.</br>
                    3.신 청 : 당 사이트가 제공하는 신청서 양식에 해당 정보를 기입하고, 본 약관에 동의하여 서비스 이용계약을 완료시키는 행위</br>
                    4.본 약관에서 정의하지 않은 용어는 개별서비스에 대한 별도약관 및 이용규정에서 정의합니다.</br>
                    제 4조 (이용계약의 성립)</br>
                    1.이용계약은 이용자가 본 이용약관 내용에 대한 동의와 이용신청에 대하여 당 사이트의 이용승낙으로 성립합니다.</br>
                    2.본 이용약관에 대한 동의는 이용신청 당시 해당 당 사이트의 '동의함' 또는 신청(등록)버튼을 누름으로써 의사표시를 합니다.</br>
                    제 5조 (개인정보 사용에 대한 동의)</br>
                    1.이용자의 개인정보에 대해서는 당 사이트의 개인정보 처리방침이 적용됩니다. 다만, 당 사이트 이외의 링크된 사이트에서는 당 사이트의 개인정보 처리방침이 적용되지 않습니다.</br>
                    </p>
                    <div class="checkboxall">
                        <input type="radio" required name="agree"value="동의">동의
                        <input type="radio" name="agree"value="비동의">비동의
                    </div>
                </div>
                <div class="check1">
                    <p>개인정보처리방침</p>
                    <p class="agree">
                         JAKOMO 는 고객의 개인정보보호를 소중하게 생각하며, 「개인정보보호법」, 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」을 비롯한 모든 개인정보보호 관련 법률규정을 준수하고 있습니다. </br>
                         1.수집하는 개인정보의 항목, 수집∙이용목적 및 수집방법 </br>
                           수집항목: 성명, 이메일, 휴대전화, 주소, 우편번호 수집∙이용목적: 주문상품의 배송에 대한 정확한 배송지 정보의 확보 등 </br>
                           수집방법: 다니엘 웰링턴은 홈페이지에서 주문 시 배송을 위한 개인정보 수집 및 이용에 대해 「동의」 버튼을 클릭할 수 있는 절차를 마련하고, 고객이 「동의」 버튼을 클릭 시 개인정보 수집 및 이용에 동의한 것으로 간주합니다. </br>
                         2.회원가입 시
                         수집항목: 전화번호, 생일, 출생연도, 연령대,</br>
                         수집방법: 홈페이지에서 고객이 회원 가입하기 버튼 클릭 시, 휴대폰 본인 인증 또는 카카오 계정으로 로그인 기능을 통해 회원가입할 수 있는 절차를 마련합니다.</br>
                         3.개인정보의 제3자 제공 </br>
                         이용자의 개인정보를 "1. 수집하는 개인정보의 항목, 수집∙이용목적 및 수집방법" 에서 고지한 범위 내에서 사용하며, 동 범위를 초과하여 이용자의 개인정보를 이용하거나 제3자에게 제공하지 않습니다. 다만, 다음 각 호의 어느 하나에 해당하는 경우에는 이용자 또는 제3자의 이익을 부당하게 침해할 우려가 있을 때를 제외하고는 개인정보를 목적 외의 용도로 이용하거나 이를 제3자에게 제공할 수 있습니다. 
                    </p>
                    <div class="checkboxall">
                        <input type="radio" required name="agree2"value="동의">동의
                        <input type="radio" name="agree2"value="비동의">비동의
                    </div>
                </div>
                <div class="id margin"><label>아이디</label><input name="id" required type="text" minlength="1"> </div>
                <div class="nickname margin"><label>이름</label><input name="name" required type="text" minlength="1"> </div>
                <div class="pass margin"><label>비밀번호</label><input name="pass" required type="password" minlength="1"> </div>
                <div class="checkpass margin"><label>비밀번호 확인</label><input name="checkpass" required type="password" minlength="1"> </div>
                <div class="email margin">
                    <label>이메일</label><input name="emailname" required type="text" minlength="1"><span>@</span>
                    <select name="emaildomain">
                        <option>직접입력</option>
                        <option>naver.com</option>
                        <option>gmail.com</option>
                        <option>daum.com</option>
                    </select>
                    <input name="emaildomain2" type="text" minlength="1">
                 </div>
                 <div class="addressbox margin">
                    <label>우편주소</label>
                    <input type="text" id="postcode" placeholder="우편번호" name="postcode">
                    <input type="button" onclick="sample2_execDaumPostcode()" value="우편번호 찾기" class="address-btn"><br>
                    <input type="text" id="address" placeholder="주소" name="address"><br>
                    <input type="text" id="detailAddress" placeholder="상세주소"name="detailAddress">
                    <input type="text" id="extraAddress" placeholder="참고항목"name="extraAddress">
                        
                 </div>
                 <div class="phone margin">
                     <label>핸드폰번호</label>
                     <input name="phone1" required type="text" minlength="1">
                     <input name="phone2" required type="text" minlength="1">
                     <input name="phone3" required type="text" minlength="1">
                     <a href="#">본인인증</a>
                 </div>
                 <div class="letter margin">
                    <label>수신여부</label>
                    <input name="mailok" value="메일수신동의"type="checkbox">메일 수신 동의
                    <input name="snsok"  value="sns수신동의"type="checkbox">SNS 수신동의
                    <p class="etc">*이벤트정보 및 기타정보를 빠르게 만나실 수 있습니다</p>
                </div>
                 <div class="btn">
                    <input type="reset" value="취소" class="prev-btn">
                    <input type="submit" value="회원가입" class="register-btn">
                </div>
            </form>
        </div>
    </div>
    <?php include_once "inc/footer.php";?>
</body>
</html>