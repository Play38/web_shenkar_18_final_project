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
	$fnames = array("Name","Asher","Dana","Yakov","Tal","Guts","Gundam","Orel");
	$lnames = array("The king","Katz","Guttman","Cohen","Abir","Lastname2k","Lonet");
	$randomName = '';
	$space = ' ';
		$randomName .= $fnames[mt_rand(0, count($fnames) - 1)];
		$randomName .= $space;
		$randomName .= $lnames[mt_rand(0, count($lnames) - 1)];
    return $randomName;
}
$name = generateRandomName();
$pickup = mysqli_real_escape_string($link, $_REQUEST['pickup']);
$dest = mysqli_real_escape_string($link, $_REQUEST['dest']);
$weight = mysqli_real_escape_string($link, $_REQUEST['weight']);
$breakable = mysqli_real_escape_string($link, $_REQUEST['breakable']);
$amount = mysqli_real_escape_string($link, $_REQUEST['amount']);
$time= mysqli_real_escape_string($link, $_REQUEST['time']);
$sql = "INSERT INTO sender_list_204 VALUES ('$name', '$pickup', '$dest','$weight','$breakable','$amount','$time')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>