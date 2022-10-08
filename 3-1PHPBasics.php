<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-1 PHP Basics</title>

<?php
// variables
$yourName = 'Nicole Puente';
$number1 = 2;
$number2 = 3;
$total = $number1 + $number2;
//display assignment name in h1 element
echo '<h1>3-1: PHP Basics</h1>';

//PHP variable that is an array
$languageArray = array('PHP', 'HTML', 'Javascript');

//loop through the array
foreach ($languageArray as $value) {
    echo "$value ,";
}

?>

</head>
<body>

    <h2> <?php echo $yourName; ?> </h2>
    <p> <?php echo $number1 ?> </p>
    <p> <?php echo $number2 ?> </p>
    <p> <?php echo $total ?> </p>
    <p id="display"></p>

<script>
    const ArrayLanguages = ["PHP", "HTML", "Javascript"];
    document.getElementById("display").innerHTML = ArrayLanguages.toString();
</script>
       
</body>
</html>

