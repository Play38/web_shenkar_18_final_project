<?php
    include('db.php');

        //escape variables for security
        $pickupe = mysqli_real_escape_string($connection, $_POST['pickup']);
        $deste = mysqli_real_escape_string($connection, $_POST['dest']);
        $weighte = mysqli_real_escape_string($connection, $_POST['weight']);
        $breakablee = mysqli_real_escape_string($connection, $_POST['breakable']);
        $amounte = mysqli_real_escape_string($connection, $_POST['amount']);
        $timee = mysqli_real_escape_string($connection, $_POST['time']);
    
        //SET: insert new data to DB
        $query2 = "INSERT into sender_list_204(pickup, dest, weight, breakable, time, amount) values ('$pickupe', '$deste', '$weighte', '$breakablee', '$timee', '$amounte')";
        $result = mysqli_query($connection, $query2);
        /*
        //GET: get data again
        $query2 = "SELECT * FROM tbl_test order by title desc";
        $result = mysqli_query($connection, $query2);
        */
    /*
    //GET: get data again
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)){ //result are in an associative array. keys are cols names 
        echo "<li><h2>" . $row["title"] . "</h2><h6>" . $row["txt"] . "</h6></li>";
    }
    echo "</ul>";
    */
    //release returned data
    
    //mysqli_free_result($result);

    //close DB connection
    mysqli_close($connection);
?>