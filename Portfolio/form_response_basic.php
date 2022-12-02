<!doctype html>
<html lang="en">
<head>

<title>Contact php form</title>
<!-- Author: Nicole Puente
     Date: September 4 2021-->
<meta charset="UTF-8">
<meta name="description" content="Koala Bear National Information Center contact page">
<meta name="keywords" content="koala, information center, KBNIC, Australian koala foundation">
<meta name="author" content="Nicole Puente">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/koala_style.css">
<link rel="stylesheet" href="css/koala_structure.css">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
</head>

<body>
<div id="liquidcontainer">
  <a name="top"></a>

  <header>
      <img src="images/koala_banner.jpg" alt="koala site banner" class="noborder">
      <h1>Contact Us!</h1>
  </header>

  <div class="nav">
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="faq.html">FAQ</a></li>
      <li><a href="save_koalas.html">Save Koalas</a></li>
      <li>Gallery</li>
      <li>Adopt</li>
      <li><a href="contact_us.html">Contact Us</a></li>
    </ul>
  </nav>
  </div>


<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed'>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	}
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

<footer>
 <p>&copy; Copyright 2018 All rights reserved. Australian Koala Foundation </p>
 <p><a href="https://www.savethekoala.com/" target=_blank>Australian Koala Foundation</a>
<p><a href="https://www.savethekoala.com/" target="_blank">
<img src="images/koala_logo.svg" alt = "koala logo" width="100" height="100" class="noborder"></a></p>
<p><a href="#top"> Back to top of page</a></p>
</footer>
</body>
</div><!--close div container-->
</html>
