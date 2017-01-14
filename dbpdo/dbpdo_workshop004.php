<?php
// Weaving our own web - Coding for campaigners 10/01/2017

# database conection details
require 'db_username.php';

# Connect to the database. DBH means DataBase Handle
$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

# ERRMODE use for testing
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

# The data we want to insert
$data = array ( 'data' => 'some data to hold in our database',
                'userid' => '01',
                'timestamp' => '2016-12-13 00:00:00'
);

# Testing: echo the data we want to insert
echo "<br />The data we want to insert...";
echo '<pre>';
print_r ($data);
echo '</pre>';

// Close the connection
$DBH = null;

// This code places the data we want to insert in array, then echos the array for testing.
// In real life the data might come from user input.
?>
