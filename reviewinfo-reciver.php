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
    <section class="logo">שולח</section>
    <section class="bread">מילוי פרטים <b class="breadSelect">></b> <section class="breadSelect">אימות פרטים</section> <b class="breadSelect">></b> סיום</section>
</header>
<main>
    <section class="grayArea">?האם אלו הפרטים שהזנת</section>
    <section class="contentReciver mx-auto">
        <section class="contentBox">
            <section class="symbol fas fa-list-ol"></section>
            <section class="textInBox2">
                <section>:מספר הפריטים הוא</section>
                <?php
                echo"<section> $_POST[amount]</section> ";
                ?>
            </section>
        </section>
        <section class="contentBox">
            <section class="symbol far fa-clock"></section>
            <section class="textInBox2">
                <section>:שעת השילוח</section>
                <?php
                echo"<section> $_POST[time]</section> ";
                ?>
            </section>
        </section>
        <section class="contentBox">
            <section class="symbol fas fa-box"></section>
            <section class="textInBox2">
                <section>:מקום איסוף המשלוח</section>
                <?php
                echo"<section> $_POST[pickup]</section> ";
                ?>
            </section>
        </section>
        <section class="contentBox">
            <section class="symbol fas fa-balance-scale"></section>
            <section class="textInBox2">
                <section>:משקל הפריט</section>
                <?php
                echo"<section> $_POST[weight]</section> ";
                ?>
            </section>
        </section>
        <section class="contentBox">
            <section class="symbol fas fa-truck"></section>
            <section class="textInBox2">
                <section>:יעד המשלוח</section>
                <?php
                echo"<section> $_POST[dest]</section> ";
                ?>
            </section>
        </section>
        <section class="contentBox ">
            <section class="symbol fas fa-glass-martini"></section>
            <section class="textInBox2">
                <section>?שביר</section>
                <?php
                echo"<section> $_POST[breakable]</section> ";
                ?>
            </section>
        </section>
    </section>
    <section class="reciverPrice">
        <h4> :על פי הפרטים שהזנת, עלות המשלוח תהיה</h4>
        <section>
            <?php
            $price=rand(10,100); echo $price
            ?>₪
        </section>
    </section>
    <form action="action.php" method ="post">
        <input type="hidden" name="pickup" id="pickup"
               value="<?php echo $_POST['pickup'] ?>">
        <input type="hidden" name="dest" id="dest"
               value="<?php echo $_POST['dest'] ?>">
        <input type="hidden" name="time" id="time"
               value="<?php echo $_POST['time'] ?>">
        <input type="hidden" name="amount" id="amount"
               value="<?php echo $_POST['amount'] ?>">
        <input type="hidden" name="weight" id="weight"
               value="<?php echo $_POST['weight'] ?>">
        <input type="hidden" name="breakable" id="breakable"
               value="<?php echo $_POST['breakable'] ?>">
        <input type="hidden" name="price" id="price"
               value="<?php echo $price?>">
        <input id="button" type="submit" class="ok"></button>
    </form>
    <a href="getinfo-reciver.html" class="prev">חזור</a>
</main>
</body>
</html>
<?php
?>