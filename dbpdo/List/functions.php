<?php
/* Generic function to output any data as a table */
/* Expects $data in PDO fetchAll() format i.e. numbered records, containing associative field => value items
 e.g. 
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
function data2htmlTable($data, $controls = true) 
{
    $html = "";
    $html .=  '<table border="1">'."\n";

    // use first record for headers
    $html .=  '<thead>'."\n";        
    $header_row = $data[0];
    $html .=  '</tr>'."\n";    
    foreach ($header_row as $key => $val) {
        $html .=  '<th>'.$key.'</th>'."\n";
    }
    $html .=  '</tr>'."\n";    
    $html .=  '</thead>'."\n";
    
    // and output table body
    $html .=  '<tbody>'."\n";
    foreach ($data as $record) {
        $html .=  '<tr>'."\n";
        foreach ($record as $key => $val) {
            $html .=  '<td>'.$val.'</td>'."\n";
        }
        if ($controls) {
            $html .= '<td>';
            $html .= '<form action = "'.$_SERVER['PHP_SELF'].'" method = "post">'."\n";
            $html .=  '<input type = "hidden" name = "ID" id = "ID" value = "'.$record['ID'].'" />'."\n";
            $html .= '<input type = "submit" name = "submit" id = "submit" value ="Delete">'."\n";
            $html .=  '</form>'."\n"; 
            $html .= '</td>';
        }
        $html .=  '</tr>'."\n";
        

    }    
    $html .=  '<tbody>'."\n";
    $html .=  '</table>'."\n";    
    
    return $html;
}

/* Make an 'add' form using a single $dataItem as an example */
function makeForm($dataItem) 
{
    $html = "";
    
    $html .=  '<form action = "'.$_SERVER['PHP_SELF'].'" method = "post">'."\n";

    // add form elements for each database field
    foreach ($dataItem as $key => $val) {
        if ($key == "ID") continue; // Skip ID field - not wanted for an add form
        $html .=  '<label for = "'.$key.'">'.$key.'</label>'.':'."\n";    
        $html .=  '<input type = "text" name = "'.$key.'" id = "'.$key.'"/>'."\n";
        $html .= '<br/>';
    }  
      
    // add a submit button
    $html .= '<input type = "submit" name = "submit" id = "submit" value ="Add">'."\n";        
    
    $html .=  '</form>'."\n";    
    
    return $html;
}
?>
