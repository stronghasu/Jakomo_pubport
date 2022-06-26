<?php
    include "../inc/db_connect.php";

    $agree1=$_POST["agree"];
    $agree2=$_POST["agree2"];
    $id=$_POST["id"];
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $checkpass=$_POST["checkpass"];
    $emailname=$_POST["emailname"];
    $emaildomain=$_POST["emaildomain"];
    $emaildomain2=$_POST["emaildomain2"];
    $postcode=$_POST["postcode"];
    $address=$_POST["address"];
    $detailAddress=$_POST["detailAddress"];
    $extraAddress=$_POST["extraAddress"];
    $phone1=$_POST["phone1"];
    $phone2=$_POST["phone2"];
    $phone3=$_POST["phone3"];
    $mailok=$_POST["mailok"];
    $snsok=$_POST["snsok"];

    $sql = "INSERT INTO members(agree,agree2,id,name,pass,checkpass,emailname,emaildomain,emaildomain2,
                                 postcode,address,detailAddress,extraAddress,phone1,phone2,phone3,mailok,snsok)
            VALUES ('$agree1','$agree2','$id','$name','$pass','$checkpass','$emailname','$emaildomain',
                    '$emaildomain2','$postcode','$address','$detailAddress','$extraAddress','$phone1',
                    '$phone2','$phone3','$mailok','$snsok')
            ";
// 콤마, 벨류값뒤 홑따옴표 주의..
    mysqli_query($conn,$sql);

    header("Location:../login.php");


?>