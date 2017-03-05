<?php

/**
 * Experimental php to try to setup database for List
 * Alernatively, do this in mysql or phpmyadmin or however
 * 
 * XXX: No error reporting or handling
 */

    require("db.php");
    $db = new DB();
    $DBH = $db->getPDOConnection();
    
    /* PROBLEM: Initial steps would need to be done by a higher-level database user
    echo '<p>'.'Setting up List database:'.'<p>';    
    
    // Create database
    $DBH->exec("
        CREATE DATABASE IF NOT EXISTS `".$db->dbname."`;
        "        
    );    
    echo '<p>'.'Database should be created now.'.'<p>';    
    
    // Assign user permissions
    $DBH->exec("
        GRANT ALL PRIVILEGES ON `".$db->dbname."`.* TO '".$db->user."'@'".$db->host."';
        FLUSH PRIVILEGES;
        "        
    );        
    echo '<p>'.'Database user permissions should be set up now.'.'<p>';    
    */
    
    // setup List table
    $DBH->exec("
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
    $DBH->exec("
        INSERT INTO `List` (Item) VALUES ('Test');
        "
    );    
    echo '<p>'.'Test item should be inserted now.'.'<p>';    
    
    echo '<p>'.'<a href="index.php">Home</a>'.'</p>';

?>
