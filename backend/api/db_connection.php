<?php
// api/db_connection.php

/**
 * Get database connection
 * 
 * @return PDO
 */
function getDatabaseConnection() {
    $host = 'demo-database.csnu0ao8chqz.us-east-1.rds.amazonaws.com';
    $db_name = 'hello_world';
    $username = 'admin';
    $password = 'Ashish321';
    
    $dsn = "mysql:host=$host;dbname=$db_name;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    
    return new PDO($dsn, $username, $password, $options);
}
?>
