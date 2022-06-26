<?php include "inc/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>후기작성</title>
    <?php include_once "inc/default.php";?>
    <link rel="stylesheet" href="css/board-detail-view.css">
    <script src="js/mainjs.js"></script>
</head>
<body>
    <?php include_once "inc/header.php";?>
    <h1 class="board-write-view-title">고객리뷰</h1>
    <div class="write-view" >
        <div class="center">
            <?php
            $num = $_GET['num'];
            $sql = "SELECT * FROM board WHERE number=$num";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            ?>
    
            <div class="clear">
                <div class="title">제목<p><?php echo $row['title'];?></p></div>
                <div class="context">내용<p><?php echo $row['context'];?></p></div>
                <div class="imgbox"><img src="php/download/<?php echo $row['image'];?>"></div><!--경로 제대로 써-->
                <?php 
                        if($_SESSION['userid'] == $row['author'])
                        {
                ?>
                    <div class="modify-btn"><a href="board_update_view.php?num=<?php echo $num;?>">수정하기</a></div>               
                    <div class="delete-btn"><a href="php/board_delete.php?num=<?php echo $num;?>">삭제하기</a></div> 
                    <div class="go-back"><a href="reiew.php">목록</a></div>   
                <?php } else { ?>
                    <div class="go-back"><a href="reiew.php">목록</a></div>               
                <?php } ?>

            </div>
           
       </div>
    </div>
    <?php include_once "inc/footer.php";?>
</body>
</html>