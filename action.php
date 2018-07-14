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
function generateRandomName() {
    $fnames = array("Omer","Ofir","Dana","Jacob","Idan","Daniel","Max","Shahar","Shoham","Tomer","Lior","Miri","Lev","Natsu","Lucy","Gray","Nir","Sagi","Or","Neta","Noa","Sahar");
    $lnames = array("Cohen","Guttman","Levi","Ben ari","Noodleman","Dekal","Rubinshtein","Lotan","Roditi","Kovalevski","Abir","Dragneel","Heartfilia","Fullbuster","Adler","Hadad","Granot","Richer","Eylon","Neviantsev","Gezer");
    $randomName = '';
    $space = ' ';
    $randomName .= $fnames[mt_rand(0, count($fnames) - 1)];
    $randomName .= $space;
    $randomName .= $lnames[mt_rand(0, count($lnames) - 1)];
    return $randomName;
}
$name = generateRandomName();
$price = $_POST[price];
$pickup = $_POST[pickup];
$dest = $_POST[dest];
$weight = $_POST[weight];
$breakable = $_POST[breakable];
$amount = $_POST[amount];
$time= $_POST[time];
$sql = "INSERT INTO sender_list_204 VALUES ('$name', '$pickup', '$dest','$weight','$breakable','$amount','$price','$time')";
if(mysqli_query($link, $sql)){
    header('Location: finish-reciver.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>