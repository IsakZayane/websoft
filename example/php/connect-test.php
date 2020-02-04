<?php
/**
 * A page controller
 */
// Enable verbose output of error (or include from config.php)
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors

// Create an array with the connection details
$dsn = [
    "dsn"       => "mysql:host=127.0.0.1;port=13306;dbname=websoft;charset=UTF8",  
    "username"  => "user",
    "password"  => "pass",
];

// Open the database file and catch the exception it it fails.
try {
    $db = new PDO(
        $dsn["dsn"],
        $dsn["username"],
        $dsn["password"]
    );

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>\n";
    print_r($dsn);
    throw $e;
}

// Prepare and execute the SQL statement
$stmt = $db->prepare("SELECT * FROM tech");
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll();
echo "<pre>", print_r($res, true), "</pre>";
