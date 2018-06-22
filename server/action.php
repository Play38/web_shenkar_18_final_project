<?php
   	$dbhost = "182.50.133.51" ;
	$dbuser = "studDB18A" ;
	$dbpass = "stud18aDB1!" ;
	$dbname = "studDB18A" ;
	$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
	
	if(mysqli_connect_errno ()) {
		die("DB connection failed: " . mysqli_connect_error () . " (" .
		mysqli_connect_errno () . ")"
);
}
	$sql = "INSERT INTO sender_list_204
	VALUES ('lets', 'try', 'again','2','0','4:20:0','10')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    mysqli_close($conn);
?>