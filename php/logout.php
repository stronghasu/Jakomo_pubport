<?php

    session_start();

    session_unset();

    echo"<script>
            window.alert('로그아웃되었습니다.')
            history.go(-1);
    
        </script>"


?>