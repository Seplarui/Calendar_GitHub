<?php

require 'simple_html_dom.php';

$url= "https://www.github.com/seplarui";

$html= file_get_html($url);


$contribution =$html->find('h2[class=f4 text-normal mb-2]');


$calendar = $html->find('svg[class=js-calendar-graph-svg]');

echo $cantidad;

echo "<html>";
echo "<h1>Calendario</h1>";
foreach ($calendar as $con) {
    echo $con;
}

echo "</html>";

?>
