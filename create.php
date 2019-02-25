<?php

if (array_key_exists('content', $_POST)) {
    $output = '<html>'.PHP_EOL.'<head>'.PHP_EOL;
    $output.= '<title>'.$_POST['title'].'</title>'.PHP_EOL;
    $output.= '<link rel="stylesheet" type="text/css" href="styles.css">'.PHP_EOL;
    $output.= '</head>'.PHP_EOL;
    $output.= '<body>'.PHP_EOL;
    $output.= '<nav>'.PHP_EOL;
    $output.= '<?php include (\'index.php\'); ?>'.PHP_EOL;
    $output.= '</nav>'.PHP_EOL;
    $output.= '<main>'.PHP_EOL;
    $output.= '<h1>'.$_POST['title'].'</h1>'.PHP_EOL;
    $output.= '<hr />'.PHP_EOL;
    $output.= '<pre>'.PHP_EOL;
    $content = htmlspecialchars($_POST['content']);
    $content = preg_replace('/\t/','  ',$content);
    $output.=  $content;
    $output.= '</pre>'.PHP_EOL;
    $output.= '<hr />'.PHP_EOL;
    $output.= $_POST['content'];
    $output.= '</main>'.PHP_EOL;

    $file = FormatFileName($_POST['title']);
    header('Content-type: text/plain');
    print $file.PHP_EOL;
    print PHP_EOL;
    print $output;
}

else {
    print '<form method="POST">'.PHP_EOL;
    print '<input type="text" name="title" /><br />'.PHP_EOL;
    print '<textarea rows="15" cols="80" name="content"></textarea>'.PHP_EOL;
    print '<br /><input type="submit">'.PHP_EOL;
    print '</form>'.PHP_EOL;
}

function FormatFileName($title) {
    return strtolower(preg_replace('/[^a-zA-Z0-9]+/','-',$title)).'.php';
}
