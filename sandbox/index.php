<?

$curl = curl_init();

//https://rustlabs.com/group=weapons
//https://rustlabs.com/group=items
https://rustlabs.com/item/c amp-fire




$camp_fire = "camp-fire";
$url = "http://rust.wikia.com/wiki/Weapons/$camp_fire";
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result = curl_exec($curl);



preg_match_all("!https://rustlabs.com/item/[^\s]*?!",$result,$match);

print_r($match);

curl_close($curl);



?>


