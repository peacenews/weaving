<?php
/**
 * PSEUDO-CODE/UNTESTED Experimental php to try to setup database for List
 * Alernatively, do this in mysql or phpmyadmin or however
 * 
 * XXX: No error reporting or handling
 */


    echo '<h1>'.'Installer'.'</h2>';
    
    echo '<p>'.'In development'.'</p>';    

    // TODO: Check install required

    // TODO: Check requirements ...
    

    /* PROBLEM: Initial steps would need to be done by a higher-level database user*/
    // TODO get database (root) credentials from user...
    
    /*
    $dbh = new PDO("mysql:host=$host", $user, $pass);
    # ERRMODE use for testing
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    echo '<p>'.'Setting up List database:'.'<p>';    
    
    // Create database
    $dbh->exec("
        CREATE DATABASE IF NOT EXISTS `".$db->dbname."`;
        "        
    );    
    echo '<p>'.'Database should be created now.'.'<p>';    
    
    // Assign user permissions
    $dbh->exec("
        GRANT ALL PRIVILEGES ON `".$db->dbname."`.* TO '".$db->user."'@'".$db->host."';
        FLUSH PRIVILEGES;
        "        
    );        
    echo '<p>'.'Database user permissions should be set up now.'.'<p>';    
    */
    
    // TODO: Now switch database user ...
    
    /*
    // setup List table
    $dbh->exec("
        USE `".$db->dbname."`; 
        CREATE TABLE IF NOT EXISTS `List`
        (
            ID int NOT NULL AUTO_INCREMENT,
            Item varchar(255) NOT NULL,
            PRIMARY KEY (ID)
        );
        "
    );    
    echo '<p>'.'List table should be created now.'.'<p>';
    
    // setup List table
    $dbh->exec("
        INSERT INTO `List` (Item) VALUES ('Test');
        "
    );    
    echo '<p>'.'Test item should be inserted now.'.'<p>';    
    
    */
    
    echo '<p>'.'<a href="index.php">Home</a>'.'</p>';

?>
