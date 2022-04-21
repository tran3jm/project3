<?php
    # start session
    session_start();

    # local db info through XAMPP... might need to change based on local db login info
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'modernlilydb';  
    
    # connect to db with info above
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    # make sure connection is good
    if ( mysqli_connect_errno() ) {
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    # set up query, get results and display to screen
    $query = "SELECT * FROM Foods";
    $result = mysqli_query($con, $query, MYSQLI_STORE_RESULT);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        printf("%s %.2f<br>", $row["foodName"], $row["foodCost"]);
    }

    # free result and close db connection
    mysqli_free_result($result);
    mysqli_close($con);
?>