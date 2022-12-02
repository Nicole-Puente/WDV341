<?php

    $to = $_POST['email'];
    $subject = "Testing mail function";
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
    //$headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers) ){
        echo "<h1 style= 'text-align: center'>Thank you for your interest, a confirmation email has been sent to the email provided!</h1>";
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
    <link rel="stylesheet" href="css/index_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Quicksand:wght@300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Form Handler Page</title>  

</head>
<body>
