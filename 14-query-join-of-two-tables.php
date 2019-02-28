<html>
<head>
<title>14. query join of two tables</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav>
<?php include ('index.php'); ?>
</nav>
<main>
<h1>14. query join of two tables</h1>
<hr />
<pre>
&lt;?php
include_once ('/var/www/inc/connect.php'); //returns $db

try { 
    // bring back the soecies data from the test_table
    // and the incident information from the text_bites table
    // where the incident's animal_id matches the creature id in the test_table

    // since both tables have a &quot;description&quot; column
    // use the AS operator to assign new column names to each
 
    $query = &quot;SELECT incident_date,test_table.description AS species,test_bites.description AS biteDescription FROM test_table, test_bites WHERE animal_id = test_table.id ORDER BY incident_date ASC&quot;;
    $stmt = $db-&gt;query($query);

    //use the FETCH_ASSOC mode to pair values with column names
    $rows = $stmt-&gt;fetchAll(PDO::FETCH_ASSOC);
    

    $lines = ''; //define an empty list of HTML table lines
    foreach ($rows as $row) {
        $lines .= '&lt;tr&gt;&lt;td&gt;'.$row['incident_date'].'&lt;/td&gt;&lt;td&gt;'.$row['species'].'&lt;/td&gt;&lt;td&gt;'.$row['biteDescription'].'&lt;/td&gt;&lt;/tr&gt;'.PHP_EOL;
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

} catch (PDOException $e) {
    print 'ERROR: '.$e-&gt;getMessage(); 
}
?&gt;</pre>
<hr />
<?php
include_once ('/var/www/inc/connect.php'); //returns $db

try { 
    // bring back the soecies data from the test_table
    // and the incident information from the text_bites table
    // where the incident's animal_id matches the creature id in the test_table

    // since both tables have a "description" column
    // use the AS operator to assign new column names to each
 
    $query = "SELECT incident_date,test_table.description AS species,test_bites.description AS biteDescription FROM test_table, test_bites WHERE animal_id = test_table.id  ORDER BY incident_date ASC";
    $stmt = $db->query($query);

    //use the FETCH_ASSOC mode to pair values with column names
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    $lines = ''; //define an empty list of HTML table lines
    foreach ($rows as $row) {
        $lines .= '<tr><td>'.$row['incident_date'].'</td><td>'.$row['species'].'</td><td>'.$row['biteDescription'].'</td></tr>'.PHP_EOL;
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
