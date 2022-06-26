<?php include "inc/db_connect.php";

if(!isset($_SESSION['userid'])){

    echo "<script>
                window.alert('로그인이 필요한 페이지입니다.');
                location.href='login.php';
           </script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>후기작성</title>
    <?php include_once "inc/default.php";?>
    <link rel="stylesheet" href="css/board-write-view.css">
    <script src="js/mainjs.js"></script>
</head>
<body>
    <?php include_once "inc/header.php";?>
    <h1 class="board-write-view-title">후기작성</h1>
    <div class="write-view" >
        <div class="center">
            <form method="post" action="php/board-wrtie.php" class="clear" enctype="multipart/form-data">
                <div class="title">제목<input type="text" required name="title"></div>
                <div class="context">내용<textarea name="context"required></textarea></div>
                <div class="fileup"><input type="file" name="fileload"></div>
                <div class="go-back"><a href="reiew.php">취소</a></div>               
                <div class="write"><input type="submit" value="작성"></div>
            </form>
       </div>
    </div>
    <?php include_once "inc/footer.php";?>
</body>
</html>