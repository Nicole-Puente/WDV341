<?php

    // this page will access the database for an event. It will format that event
    // into a PHP object. Then format the PHP object into a JSON formatted object
    // and echo the JSON object back to the client.


    // 1. Get our data from the database
    // 2. Create a PHP object from the data
    // 3. convert the PHP object into a JSON formatted object


    /* Algorith to do a PDO prepared statement:
        1. Connect to the database
        2. Write SQL command
        3. Prepare your statement
        4. Bind parameters, if any
        5. Execute the statement
        5. Get the data from the result set within the statement object
    */

    $eventsID = 1;
 
    require 'database/dbConnect.php';

    $sql = "SELECT events_id, events_name, events_description, events_presenter, events_date, events_time FROM wdv341_events WHERE events_id=:eventId";
    // echo $sql;

    $stmt = $conn->prepare($sql); // prepare statement

    $stmt->bindParam(':eventId', $eventsID); // bind value of 1 to parameter

    $stmt->execute(); // execute 

    $stmt->setFetchMode(PDO::FETCH_ASSOC);  // return an associate array from result set

    // create class
    class Event {
        // properties 
        public $events_id;
        public $events_name;
        public $events_description;
        public $events_presenter;
        public $events_date;
        public $events_time;

        
        // constructor methods (if any)
        // methods
    } // end of Event class

    $eventObject = new Event(); //instantiate/create a new object stored in the variable
    

    //get the data from the result-set
    $row = $stmt->fetch();

    //load the data from the table into the new object
    $eventObject->events_id = $row["events_id"];
    $eventObject->events_name = $row["events_name"];
    $eventObject->events_description = $row["events_description"];
    $eventObject->events_presenter = $row["events_presenter"];
    $eventObject->events_date = $row["events_date"];
    $eventObject->events_time = $row["events_time"];

    // echo $outputObj;

    // convert the PHP object into a JSON formatted object
    $eventJSON = json_encode($eventObject);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit 9</title>

</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>UNIT-9 Formatting JSON output</h2>
    <h3>Event Object From PHP</h3>

    <?php
        echo $eventJSON;
    ?>

</body>
</html>