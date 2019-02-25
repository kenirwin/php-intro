<html>
<head>
<title>09. My First database call</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav>
<?php include ('index.php'); ?>
</nav>
<main>
<h1>09. My First database call</h1>
<hr />
<pre>
&lt;?php
include_once ('/var/www/inc/connect.php'); //returns $db

// a familiar, simple SQL query
$query = &quot;SHOW TABLES&quot;;

// the database statement use the query method of the database object
$stmt = $db-&gt;query($query);

// create an array of all responses to the query, $rows is an array of arrays 
$rows = $stmt-&gt;fetchAll(PDO::FETCH_NUM);

// foreach response row, parse and repackage the response in html
foreach ($rows as $row) {
print '&lt;li&gt;'.$row[0].'&lt;/li&gt;'.PHP_EOL;
}
print '&lt;h2&gt;$rows data structure:&lt;/h2&gt;'.PHP_EOL;
var_dump($rows);
?&gt;
</pre>
<hr />
<?php
include_once ('/var/www/inc/connect.php'); //returns $db

// a familiar, simple SQL query
$query = "SHOW TABLES";

// the database statement use the query method of the database object
$stmt = $db->query($query);

// create an array of all responses to the query, $rows is an array of arrays 
$rows = $stmt->fetchAll(PDO::FETCH_NUM);

// foreach response row, parse and repackage the response in html
foreach ($rows as $row) {
print '<li>'.$row[0].'</li>'.PHP_EOL;
}
print '<h2>$rows data structure:</h2>'.PHP_EOL;
var_dump($rows);
?>
</main>
