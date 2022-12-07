<?php 
    /* Algorith to do a PDO prepared statement:
        1. Connect to the database
        2. Write SQL command
        3. Prepare your statement
        4. Bind parameters, if any
        5. Execute the statement
        5. Get the data from the result set within the statement object
    */
 
    require_once('../database/dbConnect.php'); //confirmed connected 

    $sql = "SELECT menu_item_name, menu_item_price, menu_item_description 
            FROM wdv341_coffeehouse_menu 
            ORDER BY menu_item_name"; //sql command
    $stmt = $conn->prepare($sql); //prepare statement
    $stmt->execute(); //execute 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);  //return an associate array from result set
    
    $year = date("Y"); //this will show current year in the copyright 

?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Savanna's Coffee House Menu Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Savanna's Coffee House Menu">
      <meta name="keywords" content="coffee, pastery, sandwiches">

			 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
    .foodItems {
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        }
    .itemName {
        font-size: px;
        text-align: center;
        font-weight: bold;
        }
    .itemPrice {
        font-size: 15px;
        text-align: center;
        font-weight: bold;
        }
    .productDesc {
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        }            



  </style>

  </head>
<body>
    <a name="top"></a>
<header>
  <div id="banner"><img src="images/coffee_banner1.jpg" alt="coffee banner"></div>
</header>

<div class="jumbotron">
  <h1>Menu</h1>
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
        </ul>
    </div>
</nav>


    <section class="container-fluid pt-5">
        <div class="row">

            <div class="col-12 my-4 text-center">
                <h3>COFFEE & BEVERAGES</h3>
                  <img src="images/coffee_a.jpg" class="rounded" width="300" height="225" alt="Top view coffee in mug, sprinkled with cinnamon" />
            </div>

            <div class="col-12 text-center">
                <h4>Fresh Roasted Coffee</h4>
                <h4>Mocha Latte</h4>
                <h4>Hot Chocolate</h4>
                <h4>Chai (Hot or Iced)</h4>
                <h4>Frappe</h4>
                <hr class="mt-5 mb-0">
            </div>

            <div class="col-12 my-4 text-center">
                <h3>WINE</h3>
            </div>

            <div class="col-12 text-center">
                <h4>Featuring California Cellars Varietals</h4>
                <h4>Chardonnay</h4>
                <h4>Pinot Grigio</h4>
                <h4>Merlot</h4>
                <h4>Cabernet Sauvignon</h4>
                <hr class="mt-5 mb-0">
            </div>

            <div class="col-12 my-4 text-center">
                <h3>BEER (bottled only)</h3>
                <i class="fas fa-wine-bottle my-3"></i>
            </div>

            <div class="col-12 text-center">
                <h4>Budweiser</h4>
                <h4>Coors</h4>
                <h4>Coors Light</h4>
                <h4>Blue Moon</h4>
                <h4>Exile Ruthie</h4>
                  <p><a href="https://exilebrewing.com/">(click to discover additional Exile Beers)</a></p>
                <h4>Firetrucker Tropical Burn</h4>
                  <p><a href="https://www.firetrucker.com/">(click to discover additional Firetrucker Beers)</a></p>
                <hr class="mt-5 mb-0">
            </div>
        </div>

        <div class="col-12 my-4 text-center">
            <h3>SANDWICHES</h3>
        </div>

        <?php
            while($row = $stmt->fetch()) {
                echo "<div class='foodItems'>";
                echo $row['menu_item_name'];
                echo "</div>";
                echo "<div>";
                echo $row['menu_item_price'];
                echo "</div>";
                echo "<div>";
                echo $row['menu_item_description'];
                echo "</div>";
                echo "<div>";
                echo "</div>";
                echo"\r\n";
            }
        
        ?>

        <div class="col-12 my-4 text-center">
            <h3>SOUPS</h3>
        </div>

        <div class="col-12 text-center">
            <h4>Savanna's Signature Soup</h4>
                <img src="images/soup.jpg" class="rounded" width="320" height="179" alt="Soup" />
            <p>
                Our famous roasted red pepper & gouda
            </p>
            <h4>Bowl: $4.99 <span>/</span> Cup:$3.99</h4>
        </div>

        <div class="col-12 text-center mt-5">
            <h4>Soup of the Day</h4>
            <p>
                Always changing, timed for the season & great with a salad or sandwich
            </p>
            <h4>Bowl: $4.99 <span>/</span> Cup:$3.99</h4>
        </div>

        <div class="col-12 text-center mt-5">
            <p> <strong>Soup & Sandwich</strong>  Choice of soup & half sandwich (no wraps, bagels or croissants as 1/2 sandwiches) <strong>$7.29</strong> </p>
            <p> <strong>Soup & Salad</strong>  Choice of soup & any half salad <strong>$7.29</strong> </p>
            <hr class="mt-5 mb-0">
        </div>

        <div class="col-12 text-center my-4">
            <h3>DESSERTS</h3>
            <i class="fas fa-cheese my-3"></i>
        </div>

        <div class="col-12 text-center mb-5">
            <h4>Enjoy the <strong>EVER</strong> changing & <strong>ALWAYS</strong> tasty <strong>BAKERY CASE!</strong></h4>
            <p>Yogurt, Muffins, Pastries, Quiche, Cigars & Strudels, Iced Cinnamon Rolls</p>
        </div>

    </section>

    <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 offset-sm-3">
                  <p class="text-center footer-text"> Copyright &copy; <?php echo $year;?> All Rights Reserved. Savanna's Coffee House.</p>
                  <p style="text-align:center;"><a href="#top"> Back to top of page</a></p>
          </div>
      </div>
      </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
