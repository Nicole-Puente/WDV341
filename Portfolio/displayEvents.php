<?php

    require_once('../database/dbConnect.php'); 

    $sql = "SELECT coffeeHouse_event_title, coffeeHouse_event_image, coffeeHouse_event_date, coffeeHouse_event_time,        coffeeHouse_event_description
            FROM wdv341_coffeehouse_events";       
    $stmt = $conn->prepare($sql);                    

    $stmt->execute();      

    $stmt->setFetchMode(PDO::FETCH_ASSOC);  

    $year = date("Y"); 

?>

<!doctype html>
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
      .jumbotron{
        background-color: #dbc1ac;
        text-align: center;
        font-family: 'Karla', sans-serif;
      }
      .carousel-inner > .item > img {
        width:100%;
        height:100%;
      }
      .carousel-inner > .item > img {
        width:100%;
        height:100%;
      }


        form {
            display:  flex;
            flex-direction:    column;
            background-color:#9bb0c2;
            width:65%;
            padding:0.5em;
            margin:1.5em auto;
            border:5px solid #e4d5cc;
            border-radius:10px;
        }

        body {
            font-family: 'Balsamiq Sans', cursive;
            font-size: 20px;
            background-color: white;
            text-align: center;
        }

        legend{
            color:	#50677a;
            text-align: Center;
            font-size: 45px;
            font-family: 'Balsamiq Sans', cursive;
        }

        div{
            color:	#d94914;
            text-align: Center;
            font-size: 35px;
            font-family: 'Balsamiq Sans', cursive;
        }


  </style>

  </head>
<body>
  <a name="top"></a>
<header>
  <div id="banner"><img src="images/coffee_banner1.jpg" alt="coffee banner"></div>
</header>

  <div class="jumbotron">
    <h1>View All Events in Database</h1>
        <p class="h6">(This is a fictitious website project for educational purposes only)</p>
  </div>

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
    while($row = $stmt->fetch()) {
        echo "<div class='eventName'>";
        echo $row['coffeeHouse_event_title'];
        echo "</div>";
        echo "<div>";
        echo $row['coffeeHouse_event_image'];
        echo "</div>";
        echo "<div>";
        echo $row['coffeeHouse_event_description'];
        echo "</div>";
        echo "<div>";
        $date=date_create($row['coffeeHouse_event_date']);
        echo date_format($date,"n/d/Y") . "\n at \n";
        $time=date_create($row['coffeeHouse_event_time']);
        echo date_format($time, "h:ia");
        echo "</div>";
        echo "<br>";
        echo"\r\n";
    }
        
    ?>
</body>
</html>