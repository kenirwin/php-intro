<?php
include_once ('/var/www/inc/connect.php'); //returns $db

try { 
    // user input is dangerous; we won't use it as-is
    $user_title = 'dog';
    $user_id = 1;

    // a fairly ridiculous query with two user inputs
    $query = "SELECT * FROM test_table WHERE title = ? OR id = ?";
    
    // instead of $db->query, use $db->prepare to handle user input
    $stmt = $db->prepare($query);

    // execute the prepared query with an array of one or more inputs
    // the prepare/execute pairing will sanitize the inputs
    // this one uses both user inputs in the order used in the query
    $stmt->execute(array($user_title,$user_id));
    
    // proceed as usual
    // use the FETCH_ASSOC mode to pair values with column names
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    $lines = ''; //define an empty list of HTML table lines
    foreach ($rows as $row) {
        $lines .= '<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['description'].'</td></tr>'.PHP_EOL;
    }

    // now that the content is compiled, create a table and header
    print '<table>'.PHP_EOL;
    print '<thead><tr><td>ID</td><td>Name</td><td>Description</td></thead>'.PHP_EOL;
    // and print the contents inside
    print '<tbody>'.PHP_EOL;
    print $lines;
    print '</tbody>'.PHP_EOL;

    // and close the table
    print '</table>'.PHP_EOL;

} catch (PDOException $e) {
    print 'ERROR: '.$e->getMessage(); 
}
?>
