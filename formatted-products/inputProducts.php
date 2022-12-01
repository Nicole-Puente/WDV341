<?php



$formProcessed = false;


if(isset($_POST['submit'])){


    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];



    $formProcessed = true;  //it is a flag, if true form data has been inserted into the db
}
else{
    //display form 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Product Input Form</h1>
    </header>
    <main>
        
        <?php
            if($formProcessed){

                //display a message
                echo "<h2>The form has been processed. Thank you very much!</h2>";
                //confirmation message - form data has been processed into the database
            
            }
            else{
                //display the form
                //echo "<h2>User requested the page. You need to Display the Form</h2>";
            
        ?>
            <h2>Please enter the product information</h2>
            <form method="post" action="inputProducts.php">
                <p>
                    <label for="product_name">Product Name: </label>
                    <input type="text" name="product_name" id="product_name">
                </p>

                <p>
                    <lable for="product_price">Product Price: </label>
                    <input type="text" name="product_price" id="product_price">
                </p>

                <p>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset">
                </p>

            </form>
        <?php 
            }   //end the else branch
        ?>
    </main>
    <footer>
        <p>Copyright</p>
    </footer>

</body>
</html>