<html>
<head>
<title>04 Print an Array</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<h1>04 Print an Array</h1>
<a href="index.php">Return to index</a>
<hr />
<pre>
     &lt;?php
         /*
  arrays can be made of strings, numbers, and other data types.
  you can't &quot;print&quot; an array...
  but you can &quot;print_r()&quot; an array -- print_r() == print readable
         */

         $list = array('one','two',3);
print_r($list);</pre>
<hr />
<?php
/*
  arrays can be made of strings, numbers, and other data types.
  you can't "print" an array...
  but you can "print_r()" an array -- print_r() == print readable
*/

$list = array('one','two',3);
print_r($list);