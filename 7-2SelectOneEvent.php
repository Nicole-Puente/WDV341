<?php

    /*algorithm to do a PDO prepared statement
    
        1. Connect to the database
        2. Write your SQL command
        3. Prepare Statement
        4. Bind parameters (if any)
        5. Execute the statement
    */
    require 'database/dbConnect.php';

    $sql = "SELECT events_name, events_description, events_presenter, events_date FROM wdv341_events WHERE events_id=1";

    $stmt = $conn->prepare($sql);   

    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Select One Event from Database</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 65%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #7f98b0;
        }
     
    </style>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h3>Unit-7.2 Select One Event from Database</h3>

    <?php
    while($row = $stmt->fetch()) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Event: ";
        echo $row['events_name'];
        echo "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Event Discription: ";
        echo $row['events_description'];
        echo "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Event Presenter: ";
        echo $row['events_presenter'];
        echo "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Event Date:";
        $date=date_create($row['events_date']);
        echo date_format($date,"l n/d/Y");
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    }
        
    ?>
  </p>  

</body>
</html>