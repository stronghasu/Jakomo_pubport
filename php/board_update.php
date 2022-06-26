<?php
header('Content-Type: text/html; charset=UTF-8');

include "../inc/db_connect.php";

$num = $_GET['num'];
$title =$_POST['title'];
$context =$_POST['context'];
$fileload=$_FILES["fileload"];

$file_name = $fileload['name'];
    
move_uploaded_file($fileload["tmp_name"],"./download/".$fileload["name"]);

$sql ="UPDATE board SET title='$title',context='$context',image='$file_name' WHERE number = $num";
// WHERE 빼먹어서 전체다바뀜 image='$file_name'따옴표 잘찍기;
mysqli_query($conn,$sql);

echo "<script>
    window.alert('수정완료');
    history.go(-2);
    </script>";

?>