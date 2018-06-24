<?php
   	$dbhost = "182.50.133.51" ;
	$dbuser = "studDB18A" ;
	$dbpass = "stud18aDB1!" ;
	$dbname = "studDB18A" ;
	$link = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
	
	if(mysqli_connect_errno ()) {
		die("DB connection failed: " . mysqli_connect_error () . " (" .
		mysqli_connect_errno () . ")"
);
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
    	<script src="includes/js/main.js"></script>
	</head>
	<body>
        <header class="header_mobile">
        	<div class="home">
        		<a href="index.html" class="fas fa-home"></a>
        	</div>
            <nav class="fas fa-bars bar hamburger" data-lightbox="image-1" onclick="openNav()" ></nav>
            <div id="mySidenav" class="sidenav">
               <div class="top_nav_box ">
                   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                   <div class="whiteCircle mx-auto"></div>
                    <div class="textMain mx-auto">
                        <p>אור כהן</p>
                        <p>@Orof</p>
                    </div>
                </div>
                <div class="middle_nav_box">
                	<div class="whiteCircle2 mx-auto"></div>
                	<div class="textMain2 mx-auto">
                		<p><h5>שליט המשלוחים</h5> 1480 נקודות</p>
                		<p>!אתה בדירוג המירבי</p>
                	</div>
                </div>
                <div class="menu_box">
                    <a href="#"><p class="far fa-credit-card"></p> הגדרות תשלום</a>
                </div>
                <div class="menu_box">
                    <a href="#"><p class="fas fa-history"></p> היסטוריה</a>
                </div>
                 <div class="menu_box">
                    <a href="#"><p class="fas fa-angle-double-right"></p> משלוחים פעילים</a>
                </div>
                <div class="menu_box">
                    <a href="#"><p class="fas fa-gift"></p> קוד קופון</a>
                </div>
                <div class="menu_box">
                    <a href="#"><p class="fas fa-cog"></p> הגדרות</a>
                </div>
                <div class="menu_box">
                    <a href="#"><p class="far fa-question-circle"></p> עזרה</a>
                </div>
            </div>
            <section class="logo">שולח</section>
            <section class="bread">מילוי פרטים <b class="breadSelect">></b> <div class="breadSelect">אימות פרטים </div><b class="breadSelect">></b> עלות <b class="breadSelect">></b> חיפוש שליח <b class="breadSelect">></b> סיום</section>
        </header>
        <main>
            <div class="grayArea">?האם אלו הפרטים שהזנת</div>
            <div class="contentReciver mx-auto">
                <div class="contentBox">
                	<div class="symbol fas fa-list-ol"></div>
                	<section class="textInBox2">
                        <section>:מספר הפריטים הוא</section>
                        <?php
                            echo"<section> $_POST[amount]</section> ";
                        ?>
                	</section>
                </div>
                <div class="contentBox"> 	
                	<div class="symbol far fa-clock"></div>
                	<section class="textInBox2">
                        <section>:שעת השילוח</section>
                        <?php
                            echo"<section> $_POST[time]</section> ";
                        ?>
                	</section>
                </div>
                <div class="contentBox">
                	<div class="symbol fas fa-box"></div>
                	<section class="textInBox2">
                		<section>:מקום איסוף המשלוח</section>
                    <?php
                             echo"<section> $_POST[pickup]</section> ";
                        ?>
                    </section>
                </div>
                <div class="contentBox">
                	<div class="symbol fas fa-balance-scale"></div>
                	<section class="textInBox2">
                        <section>:משקל הפריט</section>
                        <?php
                            echo"<section> $_POST[weight]</section> ";
                        ?>
                	</section>
                </div>
                <div class="contentBox">
                	<div class="symbol fas fa-truck"></div>
                	<section class="textInBox2">
                        <section>:יעד המשלוח</section>
                        <?php
                            echo"<section> $_POST[dest]</section> ";
                        ?>
                    </section>
                </div>
                <div class="contentBox ">
                	<div class="symbol fas fa-glass-martini"></div>
                	<section class="textInBox2">
                        <section>?שביר</section>
                        <?php
                            echo"<section> $_POST[breakable]</section> ";
                        ?>
                	</section>
                </div>
            </div>
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
            <a href="reciver.html" class="prev">חזור</a>
		</main>
	</body>
</html>
<?php
mysqli_close($link);
?>