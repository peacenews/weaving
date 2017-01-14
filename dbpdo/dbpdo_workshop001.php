<?php
// Weaving our own web - Coding for campaigners 10/01/2017
//
// This code demonstrates the built in php function: require - http://php.net/manual/en/function.require.php
// It then echos our database connection details, to check that the variables exist.
// This can be useful for troubleshooting. Do not do this if your server is live, connected to the internet.

# database conection details
require 'db_username.php';

# Testing: echo database conection details
echo "<br />Database connection details...<br />";
echo "Hostname: $host <br />";
echo $dbname.'<br />';
echo $user.'<br />';
echo $pass.'<br />';

?>
