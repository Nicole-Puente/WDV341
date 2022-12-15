<?php

$dataProcessed = false;   //at the beginning the data has NOT been processed
$year = date("Y"); 
if(isset($_POST["submit"])){

    $eventTitle = $_POST['coffeeHouse_event_title'];
    $eventDate = $_POST['coffeeHouse_event_date'];
    $eventTime = $_POST['coffeeHouse_event_time'];
    $eventDescription = $_POST['coffeeHouse_event_description'];



    $eventDate = date('Y-m-d', strtotime($eventDate));
    $eventTime = date('H:i', strtotime($eventTime));

    require_once('../database/dbConnect.php'); //connect to database

    $sql = "INSERT INTO wdv341_coffeehouse_events (coffeeHouse_event_title, coffeeHouse_event_date, coffeeHouse_event_time, coffeeHouse_event_description)
    VALUES (:eventTitle, :eventDate, :eventTime, :eventDescription)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':eventTitle',$eventTitle);
    $stmt->bindParam(':eventDate',$eventDate);
    $stmt->bindParam(':eventTime',$eventTime);
    $stmt->bindParam(':eventDescription',$eventDescription);   

    $stmt->execute();   
    
    $dataProcessed = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Savanna's Coffeehouse View All Events Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Savanna's Coffee House Homepage">
      <meta name="keywords" content="coffee, bakery, cafe, live music, food">

			 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			 <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="css/coffee_style_page.css">

  <style>
        form {
            display:  flex;
            flex-direction:    column;
            background-color:#dbc1ac;
            width:65%;
            padding:0.5em;
            margin:1.5em auto;
            border:5px solid #37251b;
            border-radius:10px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            background-color: #e4d5cc;
            text-align: center;
        }

        legend{
            color:#37251b;
            text-align: Center;
            font-size: 45px;
            font-family: 'Balsamiq Sans', cursive;
        }

  </style>

  </head>
<body>
  <a name="top"></a>
<header>
  <div id="banner"><img src="images/coffee_banner1.jpg" alt="coffee banner"></div>
</header>


  <nav id="main-nav" class="navbar navbar-expand-sm navbar-dark py-0 fixed-top">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="homePage.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactEmailForm.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </div>
</nav>

        <?php
        if($dataProcessed){ 
        //display confirmation message section
        ?>
            <section>
                <h3>Thank you for entering your event information.</h3>
            </section>
        <?php  
        }
        else{
        //display the form so the user can input data and submit it for processing
        ?>
            <section>
                <form id="event-form" name="event_form" method="post" action="addNewEvent.php" >

                    <p>Please enter the event information you would like to add below:</p>
                    <p>
                        <label for="event-title">Event Title:</label> 
                        <input type="text" name="coffeeHouse_event_title" id="event-title" />
                    </p>
                    <p>
                        <label for="event-date">Event Date:</label> 
                        <input type="text" name="coffeeHouse_event_date" id="event-date" />
                    </p>
                    <p>
                        <label for="event-time">Event Time:</label> 
                        <input type="text" name="coffeeHouse_event_time" id="event-time" />
                    </p>
                    <p>
                        <label for="event-description">Event Description:</label> 
                        <input type="text" name="coffeeHouse_event_description" id="event-description" />
                    </p>
                            
                    <p>
                        <input type="submit" name="submit" id="button" value="Submit" />
                        <input type="reset" name="button2" id="button2" value="Clear Form" />
                    </p>
                </form>
                </form>
            </section>
        <?php
        }
        ?>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <p class="text-center footer-text"> Copyright &copy; <?php echo $year;?> All Rights Reserved. Savanna's Coffee House.</p>
                    <p style="text-align:center"><a href="#top"> Back to top of page</a></p>
            </div>
        </div>
    </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>