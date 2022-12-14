<?php 
    $year = date("Y"); //this will show current year in the copyright 
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


  </style>

  </head>
<body>
  <a name="top"></a>
<header>
  <div id="banner"><img src="images/coffee_banner1.jpg" alt="coffee banner"></div>
</header>

  <div class="jumbotron">
    <h1>Welcome!</h1>
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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/coffee_f.jpg" class="d-block w-100" alt="Top view of hot coffee on wood platter">
    </div>
    <div class="carousel-item">
      <img src="images/pastry_1.jpg" class="d-block w-100" alt="Assorted pasteries">
    </div>
    <div class="carousel-item">
      <img src="images/sandwich_2.jpg" class="d-block w-100" alt="Mushroom and tomato sandwich on artisan bread">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <main>
      <div class="page-container">
        <div class="row">
        <div class="col">
                <h3 class="h3">Feeling hungry?</h3>
                <p class="p">If you're feeling hungry, we also offer a range of sandwiches, salads and homemade soups; along with a wide variety of cakes, pastries and desserts.</p>
                <p class="p">If coffee is not your thing, we have a rotation of wines from local wineries as well as beers from many local breweries.</p>
                <p class="p">For more details, check out our menu above or click the image below.</p>
                 <p><a href="menu.html" target="_blank">
                 <img src="images/coffee_sandwich.jpg" class="rounded foat-left" width="320" height="179" alt="coffee and sandwich"></a></p>

        </div>
        <div class="col">
                  <h3 class="h3">Hello!</h3>
                  <p class="p">Savanna???s is a new local coffee house that roasts it???s own coffee from the best coffee sources around the world.</p>
                  <p  class="p">In addition to coffee, we offer a range of teas, and have a partnership with many Minnesota breweries and wineries if you would prefer something a little more adult to enjoy while listening to live music or just hanging out.</p>
                  <p class="p">You can find us in the heart of MSU's campus town and our hours of operation are Monday through Thursday 6:00 am to 11:00 pm, Friday 6:00 am to 11:00 pm, Saturday 7:00 am to 9:00 pm, and Sunday 6:30am to 9:00 pm.</p>
        </div>
        <div class="col">
                  <h3 class="h3">What's happening?</h3>
                  <p class="p">Stop in on the weekends to enjoy life local music or for quieter evenings, we host a Chess Night on Monday nights. Be sure to check our schedule as we are always looking to expand on entertainment offered.</p>
                  <p class="p">Please check out our Events link above for more details and check back, it's always changing!</p>
               <img src="images/musician.jpg" class="rounded foat-right" width="320" height="179" alt="Man playing guitar and singing into microphone" />
        </div>
      </div> 
    </div> 
    </main>

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
  