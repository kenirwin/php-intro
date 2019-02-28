<html>
<head>
<title>20. HTML Basics</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav>
<?php include ('index.php'); ?>
</nav>
<main>
<h1>20. HTML Basics</h1>
<hr />
<pre>
&lt;!-- 
Notes:
* This file is plain HTML with no PHP, but it is still a valid PHP file
* Weirdly, PHP files are not required to contain any PHP code
* Comments in HTML look like this, and can be as long as necessary
* This file demonstrates several HTML form elements, but does not do any processing of the input
* Writing about HTML in HTML is tricky -- all of the &amp;lt; &amp;gt; characters you see in the code view turn into angle-brackets <> in the display view.
--&gt;
&lt;h1&gt;HTML Basics&lt;/h1&gt;

&lt;h2&gt;Tag Structure&lt;/h2&gt;
&lt;p&gt;Most HTML tags have a beginning and an end tag like:
    &amp;lt;p&amp;gt;...&amp;lt;/p&amp;gt;
The end tag is the same as the beginning tag except it adds a slash.&lt;/p&gt;

&lt;p&gt;Some tags are standalone tags that close themselves with a slash, like:
             &amp;lt;br /&amp;gt;
&lt;/p&gt;

&lt;p&gt;Many tags have additional attributes after the first part of the tag:
&amp;lt;p class=&quot;example&quot; id=&quot;p3&quot;&amp;gt;Blah blah blah&amp;lt;/p&amp;gt;
&lt;/p&gt;
&lt;h2&gt;Simple Structures&lt;/h2&gt;

&lt;h3&gt;Headers&lt;/h3&gt;
&lt;p&gt;The &amp;lt;h1&amp;gt;The h1 header&amp;lt;/h1&amp;gt; tags create top-level page headers.&lt;br /&gt;
h2, h3, h4, h5, h6 create ever-smaller headers. Headers should always be used in order (h1 should be the page header, h2 is a page subsection, h3 is a sub-subsection.) Never go straight from h1 to h3.
                                              &lt;/p&gt;


&lt;h3&gt;Paragraph&lt;/h3&gt;
&lt;p&gt;This is a paragraph. It is wrapped in 'p' tags.&lt;/p&gt;

&lt;h3&gt;An un-ordered (bullet-point) list (&amp;lt;ul&amp;gt;, with &amp;lt;li&amp;gt; list-item elements nested in it)&lt;/h3&gt;                                                                           
&lt;ul&gt;
&lt;li&gt;Thing One&lt;/li&gt;
&lt;li&gt;Thing Two&lt;/li&gt;
&lt;li&gt;Thing Three&lt;/li&gt;
&lt;/ul&gt;

&lt;h3&gt;Ordered Lists (&amp;lt;ol&amp;gt;)&lt;/h3&gt;

&lt;ol&gt;
&lt;li&gt;Thing One&lt;/li&gt;
&lt;li&gt;Thing Two&lt;/li&gt;
&lt;li&gt;Thing Three&lt;/li&gt;
&lt;/ol&gt;

&lt;h3&gt;Links (&amp;lt;a&amp;gt;)&lt;/h3&gt;
&lt;!-- the href=&quot;...&quot; contains the url and is obviously super-important --&gt;
&lt;a href=&quot;http://www.wittenberg.edu&quot;&gt;Wittenberg University&lt;/a&gt;</pre>
<hr />
<!-- 
    Notes:
* This file is plain HTML with no PHP, but it is still a valid PHP file
    * Weirdly, PHP files are not required to contain any PHP code
    * Comments in HTML look like this, and can be as long as necessary
    * This file demonstrates several HTML form elements, but does not do any processing of the input
-->
<h1>HTML Basics</h1>

<h2>Tag Structure</h2>
    <p>Most HTML tags have a beginning and an end tag like:
    &lt;p&gt;...&lt;/p&gt;
The end tag is the same as the beginning tag except it adds a slash.</p>

<p>Some tags are standalone tags that close themselves with a slash, like:
                                                                   &lt;br /&gt;
</p>

<p>Many tags have additional attributes after the first part of the tag:
&lt;p class="example" id="p3"&gt;Blah blah blah&lt;/p&gt;
</p>
<h2>Simple Structures</h2>

<h3>Headers</h3>
<p>The &lt;h1&gt;The h1 header&lt;/h1&gt; tags create top-level page headers.<br />
h2, h3, h4, h5, h6 create ever-smaller headers. Headers should always be used in order (h1 should be the page header, h2 is a page subsection, h3 is a sub-subsection.) Never go straight from h1 to h3.
</p>


<h3>Paragraph</h3>
<p>This is a paragraph. It is wrapped in 'p' tags.</p>

                                                                            <h3>An un-ordered (bullet-point) list (&lt;ul&gt;, with &lt;li&gt; list-item elements nested in it)</h3>                                                                           
<ul>
 <li>Thing One</li>
 <li>Thing Two</li>
 <li>Thing Three</li>
</ul>

                                                                            <h3>Ordered Lists (&lt;ol&gt;)</h3>

<ol>
 <li>Thing One</li>
 <li>Thing Two</li>
 <li>Thing Three</li>
</ol>

                                                                            <h3>Links (&lt;a&gt;)</h3>
<!-- the href="..." contains the url and is obviously super-important -->
<a href="http://www.wittenberg.edu">Wittenberg University</a></main>
