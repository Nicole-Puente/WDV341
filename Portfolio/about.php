<?php 

$year = date("Y"); 

?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Savanna's Coffee House Home Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Savanna's Coffee House Homepage">
      <meta name="keywords" content="coffee, bakery, cafe, live music, food">

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

  </style>

  </head>
<body>
    <a name="top"></a>
<header>
  <div id="banner"><img src="images/coffee_banner1.jpg" alt="coffee banner"></div>
</header>

  <div class="jumbotron">
    <h1>About Us</h1>
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

    <main>
      <div class="container">
          <div class="row">
            <div class="col">
                    <h3 class="h3">About Savanna's Coffee House</h3>
                    <img src="images/coffee_treat.jpg" class="rounded" width="375" height="220" alt="orange coffee mug and two croissants">
                      <p class="h6">Founded was in 2006 by MSU graduate students Michel Bohmer and Sandy Thomas. Located in the heart of MSU’s campus town, Savanna’s is designed to be a funky destination. We serve premium products such as fresh roasted coffee and espresso drinks, hot and cold teas, grilled and cold sandwiches, and homemade soups. Not just a daytime destination! Stop by in the evening, enjoy a glass of wine or beer and listen to some live entertainment in our connected theatre space.</p>
            </div>
          <div class="col">
            <h3 class="h3">Hours of Operation</h3>
                 <p class="h6">Sunday 7:00 am to 9 pm</p>
             		 <p class="h6">Monday – Thursday 6:00 am to 10:00 pm</p>
              	 <p class="h6">Friday 6:00 am to 11:00 pm</p>
              	 <p class="h6">Saturday 6:30 am to 11:00 pm</p>

                 <img src="images/cafe.jpg" class="rounded" width="375" height="220" alt="Funky cafe" />

            <h3 class="h3">Location</h3>
                 <p class="h6">604 24th Street</p>
                 <p class="h6">St. Paul, Minnesota</p>
                 <p class="h6">702-971-1154</p>
          </div>
      </div>
    </div>
    </main>

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
