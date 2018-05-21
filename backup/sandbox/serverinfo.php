<?php
$content = file_get_contents('https://raw.rust-servers.info/137.74.221.12-28025');
$array1 = get_string_between($content, 'Array', ')');
$array1 = 'Array' . $content . ')';


echo(strip_tags($content)) . '<br><br>';


function get_string_between($string, $start, $end)
{
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}