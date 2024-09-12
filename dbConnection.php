<?php
$databaseHost = 'localhost';
$databaseName = 'php_crud';
$databaseUsername = 'root';
$databasePassword = 'fff';

// Open a new connection to the MySQL server


try {
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
} catch (Throwable $th) {
    // echo "database connection error";
    // echo "</br>";
    // echo $th;
    echo "<h1>there was error at server side</h1>";
}