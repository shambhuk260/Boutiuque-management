<?php

	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "mng_boutique";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $passwd);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>