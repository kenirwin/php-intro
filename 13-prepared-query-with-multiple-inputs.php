<html>
<head>
<title>13. Prepared query with multiple inputs</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav>
<?php include ('index.php'); ?>
</nav>
<main>
<h1>13. Prepared query with multiple inputs</h1>
<hr />
<pre>
&lt;?php
include_once ('/var/www/inc/connect.php'); //returns $db

try { 
    // user input is dangerous; we won't use it as-is
    $user_title = 'dog';
    $user_id = 1;

    // a fairly ridiculous query with two user inputs
    $query = &quot;SELECT * FROM test_table WHERE title = ? OR id = ?&quot;;
    
    // instead of $db-&gt;query, use $db-&gt;prepare to handle user input
    $stmt = $db-&gt;prepare($query);

    // execute the prepared query with an array of one or more inputs
    // the prepare/execute pairing will sanitize the inputs
    // this one uses both user inputs in the order used in the query
    $stmt-&gt;execute(array($user_title,$user_id));
    
    // proceed as usual
    // use the FETCH_ASSOC mode to pair values with column names
    $rows = $stmt-&gt;fetchAll(PDO::FETCH_ASSOC);
    

    $lines = ''; //define an empty list of HTML table lines
    foreach ($rows as $row) {
        $lines .= '&lt;tr&gt;&lt;td&gt;'.$row['id'].'&lt;/td&gt;&lt;td&gt;'.$row['title'].'&lt;/td&gt;&lt;td&gt;'.$row['description'].'&lt;/td&gt;&lt;/tr&gt;'.PHP_EOL;
    }

    // now that the content is compiled, create a table and header
    print '&lt;table&gt;'.PHP_EOL;
    print '&lt;thead&gt;&lt;tr&gt;&lt;td&gt;ID&lt;/td&gt;&lt;td&gt;Name&lt;/td&gt;&lt;td&gt;Description&lt;/td&gt;&lt;/thead&gt;'.PHP_EOL;
    // and print the contents inside
    print '&lt;tbody&gt;'.PHP_EOL;
    print $lines;
    print '&lt;/tbody&gt;'.PHP_EOL;

    // and close the table
    print '&lt;/table&gt;'.PHP_EOL;

} catch (PDOException $e) {
    print 'ERROR: '.$e-&gt;getMessage(); 
}
?&gt;</pre>
<hr />
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
?></main>
