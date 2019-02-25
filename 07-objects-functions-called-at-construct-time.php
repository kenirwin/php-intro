<html>
<head>
<title>07 Objects - functions called at __construct time</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<nav>
     <?php include ('index.php'); ?>
</nav>
<main>

<h1>07 Objects - functions called at __construct time</h1>
<a href="index.php">Return to index</a>
<hr />
<pre>
&lt;?php

$values = array(1,4,3,2,5,1,6,10);
$stats = new Stats($values);
print 'Mean: '. $stats-&gt;mean;

class Stats {
    function __construct(array $arr) {
        /* 
      now the new &quot;getMean ()&quot; method is called in the construct method. 
      so whenever the new Stats object is created, it will automatically calculate the mean
      and save the mean as $this-&gt;mean
      &quot;getMean()&quot; doesn't take an argument, because it knows to calculate on the values in $this-&gt;values
        */
        $this-&gt;values = $arr;
        $this-&gt;getMean();
    }
   
    function getMean () {
        $sum = array_sum($this-&gt;values);
        $n = sizeof($this-&gt;values);
        $this-&gt;mean = $sum/$n;
    }  
}</pre>
<hr />
<?php

$values = array(1,4,3,2,5,1,6,10);
$stats = new Stats($values);
print 'Mean: '. $stats->mean;

class Stats {
    function __construct(array $arr) {
        /* 
           now the new "getMean ()" method is called in the construct method. 
           so whenever the new Stats object is created, it will automatically calculate the mean
           and save the mean as $this->mean
           "getMean()" doesn't take an argument, because it knows to calculate on the values in $this->values
        */
        $this->values = $arr;
        $this->getMean();
    }
     
    function getMean () {
        $sum = array_sum($this->values);
        $n = sizeof($this->values);
        $this->mean = $sum/$n;
    }
}
?>
</main>
