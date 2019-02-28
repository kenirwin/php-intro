<html>
<head>
<title>22. Read HTML form input in PHP</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav>
<?php include ('index.php'); ?>
</nav>
<main>
<h1>22. Read HTML form input in PHP</h1>
<hr />
<pre>
&lt;?php
         // The $_REQUEST array contains form-submitted data 
         // If the webform has been submitted, the 'form-submit' element will be set.
         // If there's a submssion, let's see the contents
         // and wrap them in &lt;pre&gt; tags to make it more readable

         if (isset($_REQUEST['form-submit'])) {
             print '&lt;pre&gt;'.PHP_EOL;
             print_r($_REQUEST);
             print '&lt;/pre&gt;'.PHP_EOL;
         }
?&gt;

&lt;form method=&quot;get&quot;&gt;
&lt;h2&gt;Textbox&lt;/h2&gt;
&lt;div&gt;
&lt;label for=&quot;name&quot;&gt;Name&lt;/label&gt;
&lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; /&gt;
&lt;/div&gt;

&lt;h2&gt;Radio Buttons&lt;/h2&gt;
&lt;p&gt;Radio buttons groups all have the same &quot;name&quot; attribute, but have different id and value attributes. You can only select one.&lt;/p&gt;
&lt;div&gt;
&lt;label&gt;Category:&lt;/label&gt;
&lt;label for=&quot;cat-animal&quot;&gt;Animal&lt;/label&gt;
&lt;input type=&quot;radio&quot; name=&quot;category&quot; id=&quot;cat-animal&quot; value=&quot;animal&quot;&gt;
&lt;label for=&quot;cat-vegetable&quot;&gt;Vegetable&lt;/label&gt;
&lt;input type=&quot;radio&quot; name=&quot;category&quot; id=&quot;cat-vegetable&quot; value=&quot;vegetable&quot;&gt;
&lt;label for=&quot;cat-mineral&quot;&gt;Mineral&lt;/label&gt;
&lt;input type=&quot;radio&quot; name=&quot;category&quot; id=&quot;cat-mineral&quot; value=&quot;mineral&quot;&gt;
&lt;/div&gt;

&lt;h2&gt;Checkboxes&lt;/h2&gt;
&lt;div&gt;
&lt;p&gt;Like radio buttons, only one &quot;name&quot; attribute for the set. Unlike radios, check as many as apply.&lt;/p&gt;
&lt;label&gt;How do you feel?&lt;/label&gt;
&lt;label for=&quot;smart&quot;&gt;Smart&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; name=&quot;feeling[]&quot; id=&quot;smart&quot; value=&quot;smart&quot;&gt;
&lt;label for=&quot;super-smart&quot;&gt;Super-Smart&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; name=&quot;feeling[]&quot; id=&quot;super-smart&quot; value=&quot;super-smart&quot;&gt;
&lt;label for=&quot;smarter&quot;&gt;Smarter by the Minute&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; name=&quot;feeling[]&quot; id=&quot;smarter&quot; value=&quot;smarter&quot;&gt;
&lt;/div&gt;


&lt;h2&gt;Pulldown/Select box&lt;/h2&gt;
&lt;div&gt;
&lt;label for=&quot;color&quot;&gt;Favorite Color&lt;/label&gt;
&lt;select name=&quot;color&quot; id=&quot;color&quot;&gt;
&lt;option value=&quot;cyan&quot;&gt;Cyan&lt;/option&gt;
&lt;option value=&quot;majenta&quot;&gt;Majenta&lt;/option&gt;
&lt;option value=&quot;yellow&quot;&gt;Yellow&lt;/option&gt;
&lt;option value=&quot;black&quot;&gt;Black&lt;/option&gt;
&lt;option value=&quot;none&quot; selected&gt;None of the Above&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;

&lt;h2&gt;Textarea&lt;/h2&gt;
&lt;div&gt;
&lt;label for=&quot;life-story&quot;&gt;Life Story&lt;/label&gt;&lt;br /&gt;
&lt;textarea name=&quot;life-story&quot; id=&quot;life-story&quot; rows=&quot;5&quot; cols=&quot;50&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;

&lt;h2&gt;Submit button&lt;/h2&gt;
&lt;div&gt;
&lt;input type=&quot;submit&quot; name=&quot;form-submit&quot; value=&quot;Submit Form&quot; /&gt;
&lt;/div&gt;
&lt;/form&gt;</pre>
<hr />
<?php
// The $_REQUEST array contains form-submitted data 
// If the webform has been submitted, the 'form-submit' element will be set.
// If there's a submssion, let's see the contents
// and wrap them in <pre> tags to make it more readable

if (isset($_REQUEST['form-submit'])) {
    print '<pre class="output">'.PHP_EOL;
    print_r($_REQUEST);
    print '</pre>'.PHP_EOL;
}
?>

<form method="get">
<h2>Textbox</h2>
<div>
<label for="name">Name</label>
<input type="text" name="name" id="name" />
</div>

<h2>Radio Buttons</h2>
    <p>Radio buttons groups all have the same "name" attribute, but have different id and value attributes. You can only select one.</p>
<div>
     <label>Category:</label>
<label for="cat-animal">Animal</label>
<input type="radio" name="category" id="cat-animal" value="animal">
<label for="cat-vegetable">Vegetable</label>
<input type="radio" name="category" id="cat-vegetable" value="vegetable">
<label for="cat-mineral">Mineral</label>
<input type="radio" name="category" id="cat-mineral" value="mineral">
</div>

<h2>Checkboxes</h2>
<div>
    <p>Like radio buttons, only one "name" attribute for the set. Unlike radios, check as many as apply.</p>
<label>How do you feel?</label>
<label for="smart">Smart</label>
<input type="checkbox" name="feeling[]" id="smart" value="smart">
<label for="super-smart">Super-Smart</label>
<input type="checkbox" name="feeling[]" id="super-smart" value="super-smart">
<label for="smarter">Smarter by the Minute</label>
<input type="checkbox" name="feeling[]" id="smarter" value="smarter">
</div>


<h2>Pulldown/Select box</h2>
<div>
<label for="color">Favorite Color</label>
<select name="color" id="color">
 <option value="cyan">Cyan</option>
 <option value="majenta">Majenta</option>
 <option value="yellow">Yellow</option>
 <option value="black">Black</option>
 <option value="none" selected>None of the Above</option>
</select>
</div>

<h2>Textarea</h2>
<div>
<label for="life-story">Life Story</label><br />
<textarea name="life-story" id="life-story" rows="5" cols="50"></textarea>
</div>

<h2>Submit button</h2>
<div>
     <input type="submit" name="form-submit" value="Submit Form" />
</div>
</form></main>
