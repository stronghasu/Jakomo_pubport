<?php include "inc/db_connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이벤트</title>
    <?php include_once "inc/default.php";?>
    <link rel="stylesheet" href="css/event.css">
    <script src="js/eventjs.js"></script>
    <script src="js/mainjs.js"></script>
</head>
<body>
    <?php include_once "inc/header.php";?>
    <div class="event">
        <div class="center">
            <h1>EVENT</h1>
            <ul>
                <li class="on"><a href="#">진행중인 이벤트</a></li>
                <li><a href="#">종료된 이벤트</a></li>
                <li><a href="#">당첨자발표</a></li>
            </ul>
        </div>
    </div>
    <div class="eventimg-all">
        <div class="center">
            <div class ="eventimgbox">
                <div class="center">
                    <div class="eventimg clear">
                        <div class="left">
                            <a href="#"><img src="img/event/event1.jpg"></a>
                        </div>
                        <div class="right">
                            <a href="#"><img src="img/event/event2.jpg"></a>
                            <a href="#"><img src="img/event/event3.jpg"></a>
                            <a href="#"><img src="img/event/event4.jpg"></a>
                            <a href="#"><img src="img/event/event5.jpg"></a>
                        </div>
                    </div>
                    <div class="eventimg clear">
                        <div class="left">
                            <a href="#"><img src="img/event/event6.jpg"></a>
                        </div>
                        <div class="right">
                            <a href="#"><img src="img/event/event7.jpg"></a>
                            <a href="#"><img src="img/event/event8.jpg"></a>
                            <a href="#"><img src="img/event/event9.jpg"></a>
                            <a href="#"><img src="img/event/event10.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="eventimgbox">
                <div class="center">
                    <div class="eventimg clear">
                        <div class="left">
                            <a href="#"><img src="img/event/endevent1.jpg"></a>
                        </div>
                        <div class="right">
                            <a href="#"><img src="img/event/endevent2.jpg"></a>
                            <a href="#"><img src="img/event/endevent3.jpg"></a>
                            <a href="#"><img src="img/event/endevent4.jpg"></a>
                            <a href="#"><img src="img/event/endevent5.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="eventimgbox">
                <div class="center">
                    <div class="eventimg clear">
                        <div class="left">
                            <a href="#"><img src="img/event/eventpre1.jpg"></a>
                        </div>
                        <div class="right">
                            <a href="#"><img src="img/event/eventpre2.jpg"></a>
                            <a href="#"><img src="img/event/eventpre3.jpg"></a>
                            <a href="#"><img src="img/event/eventpre4.jpg"></a>
                            <a href="#"><img src="img/event/eventpre5.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "inc/footer.php";?>
</body>
</html>