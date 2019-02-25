<html>
<head>
<title>03 For loop</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<h1>03 For loop</h1>
<a href="index.php">Return to index</a>
<hr />

<pre>
&lt;?php
    &sol;* 
       Longer comment for more content.
       This example introduces a "for" loop.
       It also concatenates the variable $string with some HTML and a PHP constant
       $string is now familiar.
       '&lt;br /&gt;' is the HTML line-break character
       PHP_EOL is a php constant that introduces an ASCII line break.
       PHP constants are usually represented in ALL_CAPS.
       The period is the "glue" that tells the print command to concatenate several elements
    *&sol;

$string = 'Helloooooo, World!';
for ($i=0; $i<5; $i++) {
    print $string.'&lt;br /&gt;'.PHP_EOL;
}
</pre>
<hr />

<?php
// Now printing a variable
$string = 'Helloooooo, World!';
for ($i=0; $i<5; $i++) {
    print $string.'<br />'.PHP_EOL;
}
?>

