<?php
// Weaving our own web - Coding for campaigners 10/01/2017

# database conection details
require 'db_username.php';

# Connect to the database. DBH means DataBase Handle
echo "<br />Connecting to the database...<br />";
$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

# ERRMODE use for testing
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

// Close the connection
$DBH = null;

// This example does away with try, catch as advocated at https://phpdelusions.net/pdo#reporting_errors
// This makes he code shorter and easier to read. You may still wish to use a try, catch when troubleshooting.
?>
