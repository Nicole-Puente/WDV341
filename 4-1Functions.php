<?php
    $date=date_create();
    $formatDate = date_format($date, "m/d/Y");
    $internationalDate = date_format($date, "d/m/Y");
    $string = "WDV131 Intro PHP";
    $stringLength = strlen($string);
    $trimString = trim($string);
    $lowercaseString = strtolower($string);
    $word = "DMACC";
    $phoneNumber = "1234567890"; 
    $dollarAmnt = "123456";
        
    function checkString($word) {
        global $string;
        if(strpos($string, $word)) {
            echo "'DMACC' is in the string.";
        } else {
            echo "'DMACC' is not in the string.";
        }
    } 

    function formatPhoneNumber($phoneNumber) {
        $result = sprintf("%s-%s-%s",
              substr($phoneNumber, 0, 3),
              substr($phoneNumber, 3, 3),
              substr($phoneNumber, 6));
        echo("$result");
    }

    function formatUSDollar($dollarAmnt) {
        $regex = "/\B(?=(\d{3})+(?!\d))/i";
        $usd = "$" . preg_replace($regex, ",", $dollarAmnt);
        echo $usd;
    }

    

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions Assignment</title>
</head>
<body>
    <h1>WDV Intro PHP</h1>
    <h3>4-1: Functions</h3>

    <p>1. Create a function that will accept a timestamp and format it into mm/dd/yyyy format:</p>
    <h3><?php echo $formatDate;?></h3>

    <p>2. Create a function that will accept a timestamp and format it into dd/mm/yyyy format to use when working with international dates:</p>
    <h3><?php echo $internationalDate;?></h3>

    <p>3. Create a function that will accept a string input.  It will do the following things to the string:</p>
    <h3>The string is: <?php echo $string;?></h3>
    <ol type="a">
        <li>Display the number of characters in the string:</li>
        <h3><?php echo $stringLength;?></h3>

        <li>Trim any leading or trailing whitespace:</li>
        <h3><?php echo $trimString;?></h3>

        <li>Display the string as all lowercase characters:</li>
        <h3><?php echo $lowercaseString;?></h3>

        <li>Will display whether or not the string contains "DMACC" either upper or lowercase:</li>
        <h3><?php echo checkString($word);?></h3>

    </ol>
    
    <p>4. Create a function that will accept a number and display it as a formatted phone number.   Use 1234567890 for your testing.</p>
    <h3><?php echo formatPhoneNumber($phoneNumber);?></h3>

    <p>5. Create a function that will accept a number and display it as US currency with a dollar sign.  Use 123456 for your testing.</p>
    <h3><?php echo formatUSDollar($dollarAmnt);?></h3>   


    
</body>
</html>