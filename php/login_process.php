<?php

    $id =$_POST['id'];
    
    $pass =$_POST['pass'];

   include "../inc/db_connect.php";
   
   $sql ="SELECT id,pass FROM members WHERE id='$id' ";  
   $result = mysqli_query($conn,$sql);

   $row = mysqli_fetch_array($result);

   $db_id=$row['id'];
   $db_pw=$row['pass'];

   if($id = $db_id && $pass = $db_pw){

    $_SESSION['userid']=$db_id;

    echo "<script>
            history.go(-2);
          </script>";

   }

   else     {
       echo "<script>
                window.alert('아이디와 비밀번호가 틀립니다.');
                history.go(-1);
            </script>";
   }
?>
