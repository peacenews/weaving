<?php
/**
 * A class containing database-related functions 
 * 
 * XXX: Simplified and some not recommended practices
 * FIXME: This is a bit HACKy
 * TODO: Add error handling
 */

class DB
{

    public $host = null;
    public $dbname = null;
    public $user = null;
    public $pass = null;
        
    function __construct() {
        $this->findDatabaseCredentials();
    } 
    
    /* Find database credentials file and set database credentials for this class */
    // Allows option to use 'db_username.local.php'
    // because database credentials shouldn't be uploaded to git
    // See .gitignore file- blocks db_username.local.php
    function findDatabaseCredentials() {

        if (file_exists("db_username.local.php")) {
            require("db_username.local.php");
        } else if (file_exists("../db_username.local.php")) {
            require("../db_username.local.php");
        } else if (file_exists("../db_username.php")) {
            require("../db_username.php");
        }        
        // -> should have provided $host, $dbname, $user, $pass    
        
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    
    }   
    
    /* PDO connection to database specified in credentials for general use */
    function getPDODatabaseConnection()
    {
        // set up PDO connection
        $dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        # ERRMODE use for testing
        $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
        return $dbh;    
    }
    
    /* Plain PDO connection without database specified used by db-setup */
    function getPDOConnection()
    {
        // set up PDO connection
        $dbh = new PDO("mysql:host=$this->host", $this->user, $this->pass);
        # ERRMODE use for testing
        $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
        return $dbh;    
    }

}
?>
