<?php
session_start();

$validSignon = false;       
$displayError = false;      
$year = date("Y"); 

if( isset($_SESSION['validUser']) && $_SESSION['validUser'] == 'yes'){
    $validSignon = true;  
    $inUsername = $_SESSION['inUsername'];         
}
else{
    if(isset($_POST["submit"])){

        $inUsername = $_POST['username'];
        $inPassword = $_POST['password'];

        try{
            require_once('../database/dbConnect.php'); //connect to database

            $sql = "SELECT coffeeHouse_user_name, coffeeHouse_user_pword from wdv341_coffeehouse_user ";
            $sql .= "WHERE coffeeHouse_user_name = :acctUsername and coffeeHouse_user_pword = :acctPassword";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':acctUsername', $inUsername);
            $stmt->bindParam(':acctPassword', $inPassword);

            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);    

            $row = $stmt->fetch();

            if( isset($row['coffeeHouse_user_name']) ){
                $validSignon = true;                
                $_SESSION['validUser'] = "yes";   
                $_SESSION['inUsername'] = $inUsername;  

            }
            else{
                $displayError = true;     
            }
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Savanna's Coffee Login Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Savanna's Coffee House Homepage">
      <meta name="keywords" content="band, accoustic, singer/songwriter, live music, food">

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

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
            float: right;
            display: block;
        }
        }

      .center {
        text-align: center;
        }
      
      ul.no-bullets {
        list-style-type: none;
        margin: 0;
        padding: 0;
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
        if($validSignon){
    ?>

        <div class="jumbotron">
            <h1>Admin Page</h1>
            <p class="h6">(This is a fictitious website project for educational purposes only)</p>
        </div>
            <section class="center">
                <h3>Welcome back, <?php echo $inUsername; ?>!</h3>
                <ul class="no-bullets">
                    <li><a href="displayEvents.php">Display a List of Upcoming Events</a></li>
                    <li><a href="addNewEvent.php">Add a New Event</a></li>
                    <li><a href="displayMenuItems.php">Display a List of Menu Items</a></li>
                    <li><a href="addMenuItem.php">Add a New Menu Item</a></li>                    
                    <li><a href="logout.php">Log Off</a></li>
                </ul>
            </section>
    <?php
        }
        else{
   
    ?>
        <section>
            <form method="post" action="login.php">
                <?php
                if($displayError){
                ?>
                    <div style="color:red" text-align: center>Invalid username/password. Please try again.</div>
                <?php
                }
                ?>
                <h1 style="text-align:center">Login Page</h1>
                <p>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" placeholder="Username">
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input type="text" name="password" id="password" placeholder="Password">
                </p>
                <p>
                    <input type="submit" name="submit" value="Sign In">
                    <input type="reset">
                </p>
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
            </div>
        </div>
</footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>