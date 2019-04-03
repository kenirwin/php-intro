<html>
<head>
<title>23. Integrating form input into webpage output</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav>
<?php include ('index.php'); ?>
</nav>
<main>
<h1>23. Integrating form input into webpage output</h1>
<hr />
<pre>
&lt;?php

if (isset($_REQUEST['form-submit'])) {
/* 
   What's happening in the next line is slightly outside the scope of pure HTML.
   The background-color declaration is a little piece of the CSS style language.
   Not any color name will work, but this list of words does work:
   https://www.w3schools.com/colors/colors_names.asp
*/
print '&lt;h1 style=&quot;background-color: '.$_REQUEST['color'].'&quot;&gt;'.PHP_EOL;
print 'Hello, '. $_REQUEST['name']. PHP_EOL;
print '&lt;/h1&gt;';
}
?&gt;

&lt;form method=&quot;get&quot;&gt;
&lt;div&gt;
&lt;label for=&quot;name&quot;&gt;Name&lt;/label&gt;
&lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; /&gt;
&lt;/div&gt;

&lt;div&gt;
&lt;label for=&quot;color&quot;&gt;Favorite Color&lt;/label&gt;
&lt;select name=&quot;color&quot; id=&quot;color&quot;&gt;
 &lt;option value=&quot;cyan&quot;&gt;Cyan&lt;/option&gt;
 &lt;option value=&quot;magenta&quot;&gt;Magenta&lt;/option&gt;
 &lt;option value=&quot;yellow&quot;&gt;Yellow&lt;/option&gt;
 &lt;option value=&quot;none&quot;&gt;None of the Above&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;

&lt;div&gt;
     &lt;input type=&quot;submit&quot; name=&quot;form-submit&quot; value=&quot;Submit Form&quot; /&gt;
&lt;/div&gt;
&lt;/form&gt;</pre>
<hr />
<?php

if (isset($_REQUEST['form-submit'])) {
/* 
   What's happening in the next line is slightly outside the scope of pure HTML.
   The background-color declaration is a little piece of the CSS style language.
   Not any color name will work, but this list of words does work:
   https://www.w3schools.com/colors/colors_names.asp
*/
print '<h1 style="background-color: '.$_REQUEST['color'].'">'.PHP_EOL;
print 'Hello, '. $_REQUEST['name']. PHP_EOL;
print '</h1>';
}
?>

<form method="get">
<div>
<label for="name">Name</label>
<input type="text" name="name" id="name" />
</div>

<div>
<label for="color">Favorite Color</label>
<select name="color" id="color">
 <option value="cyan">Cyan</option>
 <option value="magenta">Magenta</option>
 <option value="yellow">Yellow</option>
 <option value="none">None of the Above</option>
</select>
</div>

<div>
     <input type="submit" name="form-submit" value="Submit Form" />
</div>
</form></main>
