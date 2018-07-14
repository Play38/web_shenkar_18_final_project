<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
    <script src="includes/main.js"></script>
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
    <section class="bread">מילוי פרטים <b class="breadSelect">></b> <section class="breadSelect">אימות פרטים</section> <b class="breadSelect">></b> חיפוש משלוח <b class="breadSelect">></b> סיום</section>
</header>
<main>
    <section class="grayArea">?האם אלו הפרטים שהזנת</section>
    <section class="mainSplice smallLineHieght">
        <p><b>:שעות הפעילות שלך להיום הן </b><b class="far fa-clock"></b></p>
        <?php
        echo"<p><b> $_POST[timEnd] מ-$_POST[timeStart] עד<b></p/>";
        ?>
    </section>
    <section class="imgSplice">
        <p><b>:רדיוס השילוח שלך הוא </b><b class="fas fa-truck"></b></p>
        <section class="mapPic2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3932.196357707349!2d34.80263487796807!3d32.12399897693614!3m2!1i1024!2i768!4f13.1!5e0!3m2!1siw!2sil!4v1531484901542" width="335" height="298" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
    </section>
    <form action="selectosend-sender.php" method="post">
        <input type="hidden" name="timeStart" id="timeStart"
               value="<?php echo $_POST['timeStart']?>">
        <input type="hidden" name="timEnd" id="timEnd"
               value="<?php echo $_POST['timEnd'] ?>">
        <input id="button" type="submit" class="ok"></button>
    </form>
    <a href="getinfo-sender.html" class="prev">חזור</a>
</main>
</body>
</html>