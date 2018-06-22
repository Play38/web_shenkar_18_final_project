<?php
    include('db.php');
    
    //get data from DB to display
    $query1 = "SELECT * FROM sender_list_204 order by name pickup dest weight breakable time amount";    
    $result = mysqli_query($connection, $query1);

    if(!$result) {
        die('DB QUERY FAILED.');
    }
    if(isset($_POST['ttl'])){
        //escape variables for security
        $ttle = mysqli_real_escape_string($connection, $_POST['ttl']);
        $txt = mysqli_real_escape_string($connection, $_POST['desc']);

        //SET: insert new data to DB
        $query2 = "INSERT into tbl_test(title,txt) values ('$ttle', '$txt')";
        $result = mysqli_query($connection, $query2);

        //GET: get data again
        $query2 = "SELECT * FROM tbl_test order by title desc";
        $result = mysqli_query($connection, $query2);
    }
    /*
    //GET: get data again
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)){ //result are in an associative array. keys are cols names 
        echo "<li><h2>" . $row["title"] . "</h2><h6>" . $row["txt"] . "</h6></li>";
    }
    echo "</ul>";
    */
    //release returned data
    mysqli_free_result($result);

    //close DB connection
    mysqli_close($connection);
?>