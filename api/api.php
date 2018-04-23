<!--


api call lijst met alle artikelen van de rust wikia
    http://rust.wikia.com/api/v1/Articles/List?limit=10000

api call voor de details van een artikel
    http://rust.wikia.com/api/v1/Articles/AsSimpleJson?id=[pageid]
deze is nodig om de infobox details te krijgen
    http://rust.wikia.com/api.php?action=parse&pageid=[pageid]&section=[0&1]&prop=wikitext
    http://rust.wikia.com/api.php?action=parse&pageid=[pageid]&section=1&prop=wikitext




-->

<?php

$url = 'http://rust.wikia.com/api/v1/Articles/List?limit=10000';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$url = curl_exec($ch);
curl_close($ch);

$url = json_decode($url,true);

print_r($url);
echo $url[0]['title'];




//$json = file_get_contents('http://rust.wikia.com/api/v1/Articles/List?limit=10000');
//$obj = json_decode($json);
//echo $obj->access_token;

