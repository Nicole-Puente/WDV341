<?php
    //function- a predefined piece of code that performs an action 
        //you can use the function in multiple programs
        //reusability, modularity
        //how to call a PHP function?
            //by using the function name in the PHP script

        //define funtion
        /*
        function displayName() {
            echo "Nicole";
        }
        */
        //global scope variable
        $schoolName = "DMACC";

        function displayName($inName) {
            echo $inName;
        }

        function displaySchoolName() {
            global $schoolName; //global provides access to the global variable $schoolName
            echo $schoolName;
        }

        function displayISUSchool() {
            $schoolName = "ISU";   //local scope
            echo $schoolName;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions class 09/06/22</title>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Unit 4 PHP Functions</h2>
    <h3>Welcome <?php displayName("Jeff") ?></h3>
    <p>Your name is:  <?php displayName("John") ?></p>
    <p>Your School is:  <?php displaySchoolName($schoolName) ?></p>
    
</body>
</html>