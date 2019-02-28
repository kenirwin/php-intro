<html>
<head>
<title>11. Multi-column database output</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav>
<?php include ('index.php'); ?>
</nav>
<main>
<h1>11. Multi-column database output</h1>
<hr />
<pre>
&lt;?php
include_once ('/var/www/inc/connect.php'); //returns $db

// get the whole table 
try { 
    $query = &quot;SELECT * FROM test_table&quot;;
    $stmt = $db-&gt;query($query);

    //use the FETCH_ASSOC mode to pair values with column names
    $rows = $stmt-&gt;fetchAll(PDO::FETCH_ASSOC);
    

    $lines = ''; //define an empty list of HTML table lines
    foreach ($rows as $row) {
        $lines .= '&lt;tr&gt;&lt;td&gt;'.$row['id'].'&lt;/td&gt;&lt;td&gt;'.$row['title'].'&lt;/td&gt;&lt;td&gt;'.$row['description'].'&lt;/td&gt;&lt;/tr&gt;'.PHP_EOL;
    }

    // now that the content is compiled, create a table and header
    print '&lt;table&gt;'.PHP_EOL;
    print '&lt;thead&gt;&lt;tr&gt;&lt;td&gt;ID&lt;/td&gt;&lt;td&gt;Name&lt;/td&gt;&lt;td&gt;Description&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;'.PHP_EOL;
    // and print the contents inside
    print '&lt;tbody&gt;'.PHP_EOL;
    print $lines;
    print '&lt;/tbody&gt;'.PHP_EOL;

    // and close the table
    print '&lt;/table&gt;'.PHP_EOL;

    print PHP_EOL;
    var_dump($rows);


} catch (PDOException $e) {
    print 'ERROR: '.$e-&gt;getMessage(); 
}
?&gt;</pre>
<hr />
<?php
include_once ('/var/www/inc/connect.php'); //returns $db

// get the whole table 
try { 
    $query = "SELECT * FROM test_table";
    $stmt = $db->query($query);

    //use the FETCH_ASSOC mode to pair values with column names
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

    print PHP_EOL;
    var_dump($rows);


} catch (PDOException $e) {
    print 'ERROR: '.$e->getMessage(); 
}
?></main>
