<?php include "inc/db_connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고객리뷰</title>
    <?php include_once "inc/default.php";?>
    <link rel="stylesheet" href="css/reiew.css">
    <script src="https://kit.fontawesome.com/8a9f8ae7e8.js" crossorigin="anonymous"></script>
    <script src="js/mainjs.js"></script>
</head>
<body>
    <?php include_once "inc/header.php";?>
    <div class="reiew">
        <div class="center">
            <h1><a href="reiew.php">고객리뷰</a></h1>
            <div class="top">                
                    <div class="searchbox clear">
                        <form method="get"action="search.php">
                            <select name="search">
                                <option value="title">제목</option>
                                <option value="context">내용</option>
                                <option value="author">작성자</option>
                            </select>
                            <input type="text" name="text"class="search">
                            <input type="image"src="img/write/search-btn.png" class="search-btn">
                        </form>
                        <a class="write-btn" href="board-write-view.php">후기작성</a>
                    </div>                           
                
            </div>
            <div class="bot clear">
                    <?php
                        $sql ="SELECT number,title,context,author,date,image FROM board";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                            echo"<div class='board-box'>";
                            echo  "<a href='board_detail_view.php?num={$row['number']}'>";
                            echo     "<div class='imgbox'>";
                            echo     "<img src='php/download/{$row['image']}'>";
                            echo     "</div>";
                            echo     "<h2 class='title'>".$row['title']."</h2>";
                            echo     "<p class='text'>".$row['context']."</p>";
                            echo     "<p class='date'>".$row['date']."</p>";
                            echo     "<span class='author'>".$row['author']."</span>";
                            echo   "</a>";
                            echo"</div>";



                        }
                    ?>
                    <!-- 나중에 주석 -->
                    <!-- <a href="#">
                        <div class="imgbox">
                          <img src="img/write/re.jpg">
                        </div>
                        <h2 class="title">글쓰기제목</h2>
                        <p class="text">글쓰기내용</p>
                        <p class="date">날짜</p>
                        <span class="author">저자</span>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
    <?php include_once "inc/footer.php";?>
</body>
</html>