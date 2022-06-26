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
    <title>후기수정</title>
    <?php include_once "inc/default.php";?>
    <link rel="stylesheet" href="css/board-write-view.css">
    <script src="js/mainjs.js"></script>
</head>
<body>
    <?php include_once "inc/header.php";?>
    <h1 class="board-write-view-title">후기작성</h1>
    <div class="write-view">
        <div class="center">
            <?php
                $num = $_GET['num'];
                $sql = "SELECT * FROM board WHERE number=$num";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
            ?>
            <form method="post" action="php/board_update.php?num=<?php echo $num; ?>" class="clear"enctype="multipart/form-data">
                <div class="title">제목<input type="text" required name="title"value="<?php echo $row['title'];?>"></div>
                <div class="context">내용<textarea name="context"required><?php echo $row['context'];?></textarea></div><!--textarea는 안에 불러오는값을 넣어야함-->
                <div class="fileup"><input type="file" name="fileload" value=""></div><!--이미지안에 value값은 안들어감-->
                <div class="go-back"><a href="<?php echo '<script> history.go(-1); </script> ';?>">취소</a></div>               
                <div class="write"><input type="submit" value="작성"></div>
            </form>
            
       </div>
    </div>
    <?php include_once "inc/footer.php";?>
</body>
</html>