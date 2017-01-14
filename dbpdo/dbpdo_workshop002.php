<?php
// Weaving our own web - Coding for campaigners 10/01/2017

# database conection details
require 'db_username.php';

# Connect to the database. DBH means DataBase Handle
echo "<br />Connecting to the database...<br />";
try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    # ERRMODE use for testing
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    echo 'connected';
}
catch(PDOException $e) {
	echo 'error';
    echo $e->getMessage();
};

// Close the connection
$DBH = null;

// This example uses the try, catch method advocated at http://code.tutsplus.com/tutorials/why-you-should-be-using-phps-pdo-for-database-access--net-12059
// See "dbpdo_workshop003.php" for an alternative
?>
