<?php

    $dsn = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "myfirstdb";

    $conn = mysqli_connect($dsn, $dbuser, $dbpass, $dbname);

    try{
        $conn;
    }
    catch(mysqli_sql_exception $e){
        echo "Connection Failed" . $e->getMessage();
    }


?>