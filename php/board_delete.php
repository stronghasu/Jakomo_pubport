<?php

$num = $_GET['num'];

include "../inc/db_connect.php";

$sql = "DELETE FROM board WHERE number=$num";
mysqli_query($conn,$sql);
header("Location:../reiew.php");

?>