<?php
$year = date("Y"); 

    $to = $_POST['email'];
    $subject = "Contact Us";
    $message = ' 
    <html> 
    <head> 
    <style>
        h1{
            color:#341509;
            text-align: Center;
            font-family: sans-serif, cursive;
        }
        p{
            color:#341509;
            text-align: Center;
            font-family: sans-serif, cursive;
        }
    </style>

        <title>Welcome</title> 
    </head> 
    <body> 
        <h1>Thank you for your message!</h1> 
        <p>Your information has been received and will be reviewed. Please expect a response in 7-10 business days.</p>

        <div>
            <p>Thank you!<p>        
        </div>


        <div>
            <p>Management!<p>        
        </div>        

    </body> 
    </html>';

    $headers = "From: niccipuente@nicolepuente.name" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers) ){
    }
    else {
        echo "email failed";
    }


    $to = 'niccipuente@nicolepuente.name';
    $subject = 'Contact Email Information';
    $message = "
    <html>
    <head>
    <title>Contact Message</title>
    </head>
    <body>
    <p>Contact Detail</p>
    <table>
    <tr>
    <th>Contact Name:</th>
    </tr>
    <tr>
    <td>". $_POST['contact_name'] ."</td>

    </tr>
    <tr>
    <th>Email:</th>
    </tr>
    <tr>
    <td>". $_POST['email'] ."</td>
    </tr>
    <tr>
    <th>Contact Reason:</th>
    </tr>
    <tr>
    <td>". $_POST['contact_reason'] ."</td>
    </tr>
    <tr>
    <th>Message:</th>
    </tr>
    <tr>
    <td>". $_POST['subject'] ."</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    $headers = "From:" . $_POST['email'] . "\r\n";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if(mail($to, $subject, $message, $headers) ){
        
    }
    else {
        echo "email failed";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1.ex1 {
            margin-top: 100px;
            text-align: Center;
        }
    </style>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Savanna's Coffee House Homepage">
      <meta name="keywords" content="coffee, bakery, cafe, live music, food">

			 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			 <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="css/coffee_style_page.css">
    
    <title>Form Handler Page</title>  

    </head>
  <body>
    <div id="page-container">
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
<main>
    <h1 class="ex1">A confirmation email has been sent, Thank you!</h1>    
</main>

</div>
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

</head>
</div>
<body>
