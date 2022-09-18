<?php
    //PHP controller and or model area 

    // create a PHP variable, no keyword, ie let, const, var
    // all PHP variables in PHP start with a dollar sign, $, 

    $customerName = "Mary";  // string "", global scope 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDV341 Hello World Page</title>
    <style>

        <?php  
            echo "h1 {color: red;}"; 
        ?>

    </style>
    <script> 
        <?php
        //outout a p element to the client
        echo "let userName = 'Joe';";
        ?>
        console.log(userName);
        let cars = [<?php echo "'ford', 'honda', 'chevy'" ?>];

    </script>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>UNIT-3 PHP Basics</H2>
    <?php
        //outout a p element to the client
        echo "<p>This paragraph was created by PHP.</p>";
    ?>
    <h3>Welcome Back <?php echo $customerName; ?></h3> 
</body>
</html>