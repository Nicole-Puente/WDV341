<?php
    // PHP Connection file- connects a PHP application page to the MySQL database

    // NOTE! This connection file is specific to your local host application.
    // IT WILL NOT work on your hosting account.
    // should also not be in your git repo
    

    $host = "localhost";        // most servers default to localhost
    $database = "wdv341";       // target database to connect with
    $username = "root";         // username for the MySQL database w/in XAMPP
    $password = "";             // password for the MySQL database w/in XAMPP

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }


?>