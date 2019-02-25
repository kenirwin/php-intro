<h1>PHP Basics</h1>
<?php
$files = scandir('./');
sort($files); // this does the sorting
print '<ul>';
foreach($files as $file){
    //    if (! preg_match('/(^\.)|(\~)/',$file)) {
    if (preg_match('/(^\d)/',$file) &! preg_match('/\~/',$file)) {
        $display = preg_replace ('/-/', ' ', $file);
        echo'<li><a href="./'.$file.'">'.$display.'</a></li>'.PHP_EOL;
    }
}
print '</ul>';
