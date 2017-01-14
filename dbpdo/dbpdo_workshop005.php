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


// Insert data into the database...

# Prepare a statement to insert data into the database
$STH = $DBH->prepare("INSERT INTO table1 (data, userid, timestamp) value (:data, :userid, :timestamp)");
# Execute the prepared statement STH means Statement Handle
$STH->execute($data);
echo 'done';


// Close the connection
$DBH = null;

/*
This code should have added a row to the table1. It will only work if table1 already exists.
You might want to install phpMyAdmin for ease in creating tables etc.
Insructions for Ubuntu can be found here. Other Debian based Gnu/Linux distros will be similar.
https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-16-04
*/
?>
