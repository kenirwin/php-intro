<html>
<head>
<title>05 Foreach and embedded PHP</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<nav>
     <?php include ('index.php'); ?>
</nav>
<main>

<h1>05 Foreach and embedded PHP</h1>
<a href="index.php">Return to index</a>
<hr />
<pre>
     &lt;ul&gt;
&lt;?php
    /*
  Foreach item in array, do...
  Also, notice how the &lt;?php... ?&gt; is embedded in an HTML page.
  That's a usual way of embedding PHP code.
    */
    $list = array('one','two',3);
foreach ($list as $item) {
    print '&lt;li&gt;'.$item.'&lt;/li&gt;'.PHP_EOL;
}
?&gt;
&lt;/ul&gt;</pre>
<hr />
<ul>
<?php
/*
  Foreach item in array, do...
  Also, notice how the <?php... ?> is embedded in an HTML page.
  That's a usual way of embedding PHP code.
*/
$list = array('one','two',3);
foreach ($list as $item) {
    print '<li>'.$item.'</li>'.PHP_EOL;
}
?>
</ul>
</main>
