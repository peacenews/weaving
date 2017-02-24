<?php
// Weaving our own web - Coding for campaigners 10/01/2017

# database conection details
require 'db_username.php';

# Connect to the database. DBH means DataBase Handle
$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

# ERRMODE use for testing
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

// Fetch data from the database

# using the shortcut ->query() method here since there are no variable values in the select statement.
# STH means Statement Handle
$STH = $DBH->query('SELECT * from table1 where userid=01');

echo "<br />Fetching data from the database...<br />";

# Set the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);

# Fetch data from the database
$row = $STH->fetch();

# Echo the data we fetched
echo "<br />The data we fetched...";
echo '<pre>';
print_r ($row);
echo '</pre>';

// Close the connection
$DBH = null;

// This example fetches data from the database. Assuming that the databse and table exist and asuming that the example "dbpdo_workshop005.php" has alady added the data we are looking to fetch. Next time, we could look at tests to see whether the data is there, before we try to fetch it.
?>
