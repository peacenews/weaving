<?php
/**
 * A class implementing a generic list
 *  
 * Requires: a database connection passed on 'construction' (currently only PDO implemented)
 * XXX: Simplified code  
 * TODO: Error handling
 */
 
class SimpleList
{

    private $dbh;    

    /* Class constructor, handles the db connection passed */
    function __construct($dbh) 
    {
        $this->dbh = $dbh;            
    }
    
    /* Basic security clean 
    XXX: Shouldn't roll own security- rather use an established library
    */
    function clean($string) 
    {
        // semi-complicated stuff to just truncate and only allow alphanumeric characters
        $string = substr($string, 0, 255);
        $string = preg_replace("/\W/","_",$string);        
        return $string;
    }   
  
    function getAllItems() 
    {
        $sql = 'SELECT * FROM List;';
        $sth = $this->dbh->query($sql);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $data = $sth->fetchAll(); 
        return $data;
        /*           
        Format: 
        array(n) {
          [0]=>
          array(2) {
            ["ID"]=>
                string(1) "1"
            ["Item"]=>
                string(4) "Test"
          }
          [1]=> etc.
        */  
    }
    
    function add($data)
    {
        // Using only $data['item'] at the current time
        // NB: do some basic security cleaning first
        $data['Item'] = $this->clean($data['Item']);
        
        // and add to database
        $sql = ("INSERT INTO List (Item) value (:Item);");        
        $sth = $this->dbh->prepare($sql);
        $pdo_data = array(':Item' => $data['Item']);
        $sth->execute($pdo_data);
        // TODO: Error handling
    }
    
    function update($data)
    {
        // TODO
    }
    
    function delete($data)
    {
        $sql = "DELETE FROM List WHERE Id = :ID;";        
        $sth = $this->dbh->prepare($sql);
        $pdo_data = array(':ID' => $data['ID']);
        $sth->execute($pdo_data);
  
    }    

} 

?>
