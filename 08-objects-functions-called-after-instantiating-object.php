<html>
<head>
<title>08 Objects - functions called after instantiating object</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<h1>08 Objects - functions called after instantiating object</h1>
<a href="index.php">Return to index</a>
<hr />
<pre>
&lt;?php

$values = array(1,4,3,2,5,1,6,10);
$stats = new Stats($values);
print 'Mean: '. $stats-&gt;mean . PHP_EOL;
print 'Median: '. $stats-&gt;getMedian() . PHP_EOL;

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
    function getMedian () {
        $sorted = $this-&gt;values;
        asort($sorted);
        $middle_index = round(sizeof($sorted)/2);
        return $sorted[$middle_index];
    }
}</pre>
<hr />
<?php

$values = array(1,4,3,2,5,1,6,10);
$stats = new Stats($values);
print 'Mean: '. $stats->mean . PHP_EOL;
print 'Median: '. $stats->getMedian() . PHP_EOL;

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
    function getMedian () {
        $sorted = $this->values;
        asort($sorted);
        $middle_index = round(sizeof($sorted)/2);
        return $sorted[$middle_index];
    }
}