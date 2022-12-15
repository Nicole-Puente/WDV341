<?php
    $year = date("Y"); 

    $deleteId = $_GET['eventId'];

try {
    require_once('../database/dbConnect.php'); 

    $sql = "DELETE FROM wdv341_events WHERE events_id =:eventId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':eventId', $deleteId);
    $stmt->execute();

}

catch(PDOException $e){
    //echo "Errors: " . $e->getMessage();
    $numDeletes= -1;
}
?>

<!DOCTYPE html>
<html lang="en">
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
    <title>Document</title>
</head>
<style>
	      .jumbotron{
        background-color: #dbc1ac;
        text-align: center;
        font-family: 'Karla', sans-serif;
      }

      .center {
        margin: auto;
        width: 60%;
        padding: 10px;
}
       
</style>
<body>


<?php
echo "<h1>  " . $stmt->rowCount() . ": Event Successfully Deleted</h1>";
?>
<hr>

    <div class="row justify-content-center btn btn-outline-secondary">
        <a id="return" href="displayEvents.php">Return to Events List</a>
    </div>


</body>
</html>