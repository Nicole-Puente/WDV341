<?php
    /* Algorith to do a PDO prepared statement:
        1. Connect to the database
        2. Write SQL command
        3. Prepare your statement
        4. Bind parameters, if any
        5. Execute the statement
        5. Get the data from the result set within the statement object
    */
 
    require_once('../database/dbConnect.php'); //connect to database

    $sql = "SELECT events_name, events_description, events_presenter, events_date FROM wdv341_events ORDER BY events_name";       // puts the sql command in a variable. 

    $stmt = $conn->prepare($sql);                         // prepare your statement   

    $stmt->execute();                                     // execute the SQL code of the prepared statement

    $stmt->setFetchMode(PDO::FETCH_ASSOC);                //          

    // $array = $stmt->fetch();                              // fetch one row of data

    //echo $array['events_name'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .eventName {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h3>Event Listing</h3>

    <?php
    while($row = $stmt->fetch()) {
        echo "<div class='eventName'>";
        echo $row['events_name'];
        echo "</div>";
        echo "<div>";
        echo $row['events_description'];
        echo "</div>";
        echo "<div>";
        echo $row['events_presenter'];
        echo "</div>";
        echo "<div>";
        $date=date_create($row['events_date']);
        echo date_format($date,"l n/d/Y");
        echo "</div>";
        echo "<br>";
        echo"\r\n";
    }
        
    ?>
</body>
</html>