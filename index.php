<h1>PHP Basics</h1>
<?php
$files = scandir('./');
sort($files); // this does the sorting
foreach($files as $file){
    //    if (! preg_match('/(^\.)|(\~)/',$file)) {
    if (preg_match('/(^\d)/',$file) &! preg_match('/\~/',$file)) {
        echo'<li><a href="./'.$file.'">'.$file.'</a></li>'.PHP_EOL;
    }
}
