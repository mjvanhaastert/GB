<?php
$json_url = "http://rust.wikia.com/api/v1/Articles/List?limit=10000";
$json_string = file_get_contents($json_url);
$parsed_json = json_decode($json_string,true);

$array_column        = $parsed_json['items'];


//$print_r(array_column($array_column, 'title', 'id'));

print "Wij hebben van de volgende talen tutorials:<br /><br />";
foreach ($parsed_json as $list) {
    print_r($list);
    print '<br />';
}