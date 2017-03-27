<!DOCTYPE html>
<html>
<head>
<title>List example</title>
</head>
<body>
<h1>List example</h1>
<?php
/**
 * A simple database-driven list. Uses classes.
 * TODO: Update and delete functionality. 
 * TODO: Error handling. 
 * TODO?: Extend, for example with extra fields to be a task list
 *  TODO?: Consider 'repeating' fields e.g. comments that would need multiple 'relational' database tables
 * TODO?: Integrate with zylum ecosystem and view templates
 * REFER?: 'MVC' (Model-View-Controller) pattern.
 */
?>
<?php   
// Get a database connection 
// Uses ignorable database-related details in db.php 
// Note: If database needs to be setup, try db-setup.php first
require("db.php"); 
$db = new DB();
$DBH = $db->getPDODatabaseConnection();

// 'Instantiate' a list, using the List class from simplelist.php, and using the db connection handler 
require("simplelist.php");
$list = new SimpleList($DBH);

// and include some helper functions for view elements
require("functions.php");
?>

<?php
// handle typical CRUDish processing (from page submission)
if (count($_POST) > 0) {
    if ($_POST['submit'] == 'Add') {
        $list->add($_POST);
        echo '<p>'.'Item added (probably).'.'</p>'."\n";
    } elseif ($_POST['submit'] == 'Update') {
        // TODO                        
    } elseif ($_POST['submit'] == 'Delete') {
        $list->delete($_POST);
    }
}    
?>

<?php    
// get and show the current list items here
$items = $list->getAllItems();
echo '<h2>'.'Items'.'</h2>'."\n";
// use helper function
echo data2htmlTable($items); 

// put an 'add item' form here
// using makeForm() helper function that takes an example database item
echo '<h2>'.'Add new item'.'</h2>'."\n";
echo makeForm($items[0]); 
?>
</body>
</html>
