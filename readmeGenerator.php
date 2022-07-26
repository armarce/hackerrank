<?php

$mdString = array();

$mdString[] = '##  Soluciones a los desafios de algoritmos de Hacker Rank

En este repositorio iré subiendo mis soluciones a los desafios de algoritmos de Hacker Rank, las soluciones estarán en PHP y JavaScript. 
Tener en cuenta que puede que no sean las soluciones más óptimas, sobre todo en JavaScript, puesto que es un lenguaje que estoy aprendiendo.


| Soluciones en PHP  | Soluciones en JavaScript  |
| :------------ | :------------ |
| <a href="https://github.com/armarce/hackerrank/tree/main/php"><img src="https://cdn.cdnlogo.com/logos/p/71/php.svg" alt="Soluciones en PHP" width="100" height="60" /></a> |  <a href="https://github.com/armarce/hackerrank/tree/main/js"><img src="https://cdn.cdnlogo.com/logos/j/33/javascript.svg" alt="Soluciones en JavaScript" width="100" height="100" /></a>
';

$phpPattern = './php/*.php';

$files = glob($phpPattern);

usort($files, function($a, $b) {
    
    return filemtime($a) < filemtime($b);

});

foreach($files as $file){

    $file = str_replace(array('./php/', '.php'), array('', ''), $file);

    $mdString[] = "| <a href='js/{$file}.php'>";
    $mdString[] = "{$file}.php";
    $mdString[] = '</a> |';    
    $mdString[] = "<a href='js/{$file}.js'>";
    $mdString[] = "{$file}.js";
    $mdString[] = '</a> |';
    $mdString[] = "\n";

}

$fp = fopen('README.MD', 'w');
fwrite($fp, implode("", $mdString));
fclose($fp);

?>