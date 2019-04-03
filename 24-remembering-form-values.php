<html>
<head>
<title>24. Remembering form values</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav>
<?php include ('index.php'); ?>
</nav>
<main>
<h1>24. Remembering form values</h1>
<hr />
<pre>
&lt;?php
if (isset($_REQUEST['form-submit'])) {
print '&lt;h1 style=&quot;background-color: '.$_REQUEST['color'].'&quot;&gt;'.PHP_EOL;
print 'Hello, '. $_REQUEST['name']. PHP_EOL;
print '&lt;/h1&gt;';
}
?&gt;

&lt;form method=&quot;get&quot;&gt;
&lt;div&gt;
&lt;label for=&quot;name&quot;&gt;Name&lt;/label&gt;
&lt;!--
Right in the middle of all this HTML, we're going to insert a little PHP.
If the user submits name=Tom, we want the HTML tag to include:
&lt;input type=&quot;text&quot;... value=&quot;Tom&quot;&gt;
We'll achieve that by saying: if the name key is defined in the _REQUEST array, print it inside the value=&quot;...&quot; attribute.
--&gt;
&lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; value=&quot;&lt;?php if(isset($_REQUEST['name'])) { print $_REQUEST['name']; } ?&gt;&quot; /&gt;
&lt;/div&gt;

&lt;div&gt;
&lt;label for=&quot;color&quot;&gt;Favorite Color&lt;/label&gt;
&lt;!--
Detecting and retain the pulldown selection is more intricate.
For each color, ask if the color is set and if the color matches the current color.
If so, add the &quot;selected&quot; attribute.
--&gt;
&lt;select name=&quot;color&quot; id=&quot;color&quot;&gt;
 &lt;option value=&quot;cyan&quot; &lt;?php if(isset($_REQUEST['color']) &amp;&amp; $_REQUEST['color'] == 'cyan') { print 'selected'; } ?&gt;&gt;Cyan&lt;/option&gt;
 &lt;option value=&quot;magenta&quot;  &lt;?php if(isset($_REQUEST['color'])  &amp;&amp; $_REQUEST['color']  == 'magenta') { print 'selected'; } ?&gt;&gt;Magenta&lt;/option&gt;
 &lt;option value=&quot;yellow&quot; &lt;?php if(isset($_REQUEST['color']) &amp;&amp; $_REQUEST['color']  == 'yellow') { print 'selected'; } ?&gt;&gt;Yellow&lt;/option&gt;
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
print '<h1 style="background-color: '.$_REQUEST['color'].'">'.PHP_EOL;
print 'Hello, '. $_REQUEST['name']. PHP_EOL;
print '</h1>';
}
?>

<form method="get">
<div>
<label for="name">Name</label>
<!--
Right in the middle of all this HTML, we're going to insert a little PHP.
If the user submits name=Tom, we want the HTML tag to include:
<input type="text"... value="Tom">
We'll achieve that by saying: if the name key is defined in the _REQUEST array, print it inside the value="..." attribute.
-->
<input type="text" name="name" id="name" value="<?php if(isset($_REQUEST['name'])) { print $_REQUEST['name']; } ?>" />
</div>

<div>
<label for="color">Favorite Color</label>
<!--
Detecting and retain the pulldown selection is more intricate.
For each color, ask if the color is set and if the color matches the current color.
If so, add the "selected" attribute.
-->
<select name="color" id="color">
 <option value="cyan" <?php if(isset($_REQUEST['color']) && $_REQUEST['color'] == 'cyan') { print 'selected'; } ?>>Cyan</option>
 <option value="magenta"  <?php if(isset($_REQUEST['color'])  && $_REQUEST['color']  == 'magenta') { print 'selected'; } ?>>Magenta</option>
 <option value="yellow" <?php if(isset($_REQUEST['color']) && $_REQUEST['color']  == 'yellow') { print 'selected'; } ?>>Yellow</option>
 <option value="none">None of the Above</option>
</select>
</div>

<div>
     <input type="submit" name="form-submit" value="Submit Form" />
</div>
</form></main>
