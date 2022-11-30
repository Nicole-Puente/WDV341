<?php

    $to = $_POST['email'];
    $from = 
    $subject = "Contact Page";
    $message = ' 
    <html> 
    <head> 
        <title>Welcome to www.nicolepuente.name</title> 
    </head> 
    <body> 
        <p>Thank you for reaching out, we have received your message. They are reviewed in the order received. A response will be sent to you at " . " " . $_POST ["email"] . " " ."Thanks again, and have a great day! </p> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>Nicole Puente</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>niccipuente@gmail.com</td> 
            </tr> 
            <tr> 
                <th>Website:</th><td><a href="http://nicolepuente.name/">www.nicolepuente.name</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
    $headers = "From: niccipuente@gmail.com"  . "\r\n";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if(mail($to, $subject, $message, $headers)){ 
        echo 'Email has sent successfully.'; 
    }else{ 
       echo 'Email sending failed.'; 
    }

    $to = 'niccipuente@gmail.com';
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
    <th>First name</th>
    <th>Last name</th>
    </tr>
    <tr>
    <td>". $_POST['contact_name'] ."</td>

    </tr>
    <tr>
    <th>Email</th>
    </tr>
    <tr>
    <td>". $_POST['email'] ."</td>
    </tr>
    <tr>
    <th>Reason</th>
    </tr>
    <tr>
    <td>". $_POST['contact_reason'] ."</td>
    </tr>
    <tr>
    <th>Message</th>
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

    if(mail($to, $subject, $message, $headers)){ 
        echo 'Email has sent successfully.'; 
    }else{ 
       echo 'Email sending failed.'; 
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

        <?php
            echo "<table border='1'>";
            echo "<tr><th>Field Name</th><th>Value of Field</th></tr>";
            foreach($_POST as $key => $value)
            {
                echo '<tr>';
                echo '<td>',$key,'</td>';
                echo '<td>',$value,'</td>';
                echo "</tr>";
            } 
            echo "</table>";

        ?>