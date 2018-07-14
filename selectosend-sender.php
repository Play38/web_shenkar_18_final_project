<?php
$dbhost = "182.50.133.51" ;
$dbuser = "studDB18A" ;
$dbpass = "stud18aDB1!" ;
$dbname = "studDB18A" ;
$link = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
$zeroRows= 0;
if(mysqli_connect_errno ()) {
    die("DB connection failed: " . mysqli_connect_error () . " (" .
        mysqli_connect_errno () . ")"
    );
}
if(!mysqli_set_charset($link, 'utf8')) {
    echo 'the connection is not in utf8';
    exit();
}
$start=$_POST['timeStart'];
$end =$_POST['timEnd'];
$start=substr($start, 0, strpos($start, ":"));
$end=substr($end, 0, strpos($end, ":"));
$query1 = "SELECT * FROM `sender_list_204` WHERE $start <= time AND time <= $end";
$result = mysqli_query($link, $query1);
if(!$result) {
    die('DB QUERY FAILED.');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alef&amp;subset=hebrew" rel="stylesheet">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fetcher | Sender</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="includes/style.css" />
</head>
<body>
<header class="header_mobile">
    <section class="home">
        <a href="index.html" class="fas fa-home"></a>
    </section>
    <nav class="fas fa-bars bar hamburger" data-lightbox="image-1" onclick="openNav()" ></nav>
    <section id="mySidenav" class="sidenav">
        <section class="top_nav_box ">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <section class="whiteCircle mx-auto"></section>
            <section class="textMain mx-auto">
                <p>אור כהן</p>
                <p>@Orof</p>
            </section>
        </section>
        <section class="middle_nav_box">
            <section class="whiteCircle2 mx-auto"></section>
            <section class="textMain2 mx-auto">
                <p><h5>שליט המשלוחים</h5> 1480 נקודות</p>
                <p>!אתה בדירוג המירבי</p>
            </section>
        </section>
        <section class="menu_box">
            <a href="#"><p class="far fa-credit-card"></p> הגדרות תשלום</a>
        </section>
        <section class="menu_box">
            <a href="#"><p class="fas fa-history"></p> היסטוריה</a>
        </section>
        <section class="menu_box">
            <a href="#"><p class="fas fa-angle-double-right"></p> משלוחים פעילים</a>
        </section>
        <section class="menu_box">
            <a href="#"><p class="fas fa-gift"></p> קוד קופון</a>
        </section>
        <section class="menu_box">
            <a href="#"><p class="fas fa-cog"></p> הגדרות</a>
        </section>
        <section class="menu_box">
            <a href="#"><p class="far fa-question-circle"></p> עזרה</a>
        </section>
    </section>
    <section class="logo">שליח</section>
    <section class="bread">מילוי פרטים <b class="breadSelect">></b> אימות פרטים <b class="breadSelect">></b> <section class="breadSelect">חיפוש משלוח</section> <b class="breadSelect">></b> סיום</section>
</header>
<main>
    <section class="SenderListWrapper">
        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<section id='senderList' class='mx-auto'>
                <button class='collapsible avatarPic'>" . $row["name"] . "</button>
                <section class='content'>
                    <section class='contentBox'>
                        <section class='symbol fas fa-box'></section>
                        <section class='textInBox2'>
                            <section>:כתובת איסוף</section>
                            <section>" . $row["pickup"] . "</section>
                            </section>
                        </section>
                        <section class='contentBox'> 	
                            <section class='symbol fas fa-balance-scale'></section>
                            <section class='textInBox2'>
                                <section>:משקל</section>
                                <section>" . $row["weight"] . " kg</section>
                                </section>
                            </section>
                            <section class='contentBox'>
                                <section class='symbol fas fa-truck'></section>
                                <section class='textInBox2'>
                                    <section>:כתובת שליחה</section>
                                    <section>" . $row["dest"] . "</section>
                                    </section>
                                </section>
                                <section class='contentBox'>
                                    <section class='symbol fas fa-glass-martini'></section>
                                    <section class='textInBox2'>
                                        <section>?שביר</section>
                                        <section>" . $row["breakable"] . "</section>
                                        </section>
                                    </section>
                                    <section class='contentBox'>
                                        <section class='symbol fas fa-list-ol'></section>
                                        <section class='textInBox2'>
                                            <section>:מספר פריטים</section>
                                            <section>" . $row["amount"] . "</section>
                                            </section>
                                        </section>
                                        <section class='contentBox'>
                                            <section class='symbol far fa-clock'></section>
                                            <section class='textInBox2'>
                                                <section>:שעת איסוף</section>
                                                <section>" . $row["time"] . ":00</section>
                                                </section>
                                            </section>
                                            <section class='contentBox'>
                                                <section class='NIS'>₪</section>
                                                <section class='textInBox2'>
                                                    <section>:תשלום</section>
                                                    <section>".$row["price"]."</section>
                                                </section>
                                            </section>
                                            <section class='contentBox approve'>
                                                <section class='textInBoxApprove'>
                                                    <a href='finish-sender.html'>אשר</a>
                                                </section>
                                            </section>
                                        </section>" ;
            $zeroRows++;
        }
        if($zeroRows == 0)
        {
            echo "<section class='failSender'>
                                        <section class='fas fa-times'></section>
                                        <h3>לא נמצאו משלוחים</h3>
                                        <h3>אנא בחר שעות פעילות אחרות</h3>
                                        </section>
                                        <a href='getinfo-sender.html' class='prev'>חזור</a>";
        }
        mysqli_close($link);
        ?>
    </section>
</main>
<script src="includes/main.js"></script>
</body>
</html>