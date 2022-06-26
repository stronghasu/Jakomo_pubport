<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device -width, initial-scale=1.0">
    <title>file-process</title>
</head>
<body>
    <?php
        // db연결
        include "../inc/db_connect.php";
        // 입력변수담기
        $title=$_POST["title"];
        $context=$_POST["context"];
        $fileload=$_FILES["fileload"];

        //현재 로그인 된 아이디 변수에 담아줌
        $id = $_SESSION['userid'];

        //데이터 베이스에 업로드 된 파일명만 담아줌
        $file_name = $fileload['name'];

        // 다운로드

        move_uploaded_file($fileload["tmp_name"],"./download/".$fileload["name"]);
        // $sql = "INSERT INTO board(title,context,author,date,image)VALUES('$title','$context','$_SESSION['userid']',curdate(),'$fileload['name']')";

        $sql = "INSERT INTO board (title,context,author,date,image) VALUES ('$title','$context','$id',curdate(),'$file_name')";
        mysqli_query($conn,$sql);
        
        header("Location:../reiew.php");
    ?>
</body>
</html>