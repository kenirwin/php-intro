<html>
<head>
<title>06 Class/object basics</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<nav>
     <?php include ('index.php'); ?>
</nav>
<main>


<h1>06 Class/object basics</h1>
<a href="index.php">Return to index</a>
<hr />
<pre>
&lt;?php

$values = array(1,4,3,2,5,1,6,10);
$stats = new Stats($values);
print_r ($stats-&gt;values);

class Stats {
    function __construct(array $arr) {
        /* 
      the __construct function is always run when the &quot;new&quot; command is called (above).
      it takes an argument that will internally be called &quot;$arr&quot;
      the $this-&gt;values variable is accessible from anywhere within the class.
        */
        $this-&gt;values = $arr;
    }
}</pre>
<hr />
<?php

$values = array(1,4,3,2,5,1,6,10);
$stats = new Stats($values);
print_r ($stats->values);

class Stats {
    function __construct(array $arr) {
        /* 
           the __construct function is always run when the "new" command is called (above).
           it takes an argument that will internally be called "$arr"
           the $this->values variable is accessible from anywhere within the class.
        */
        $this->values = $arr;
    }
}
?>
</main>
