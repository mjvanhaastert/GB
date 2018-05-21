<!--


api call lijst met alle artikelen van de rust wikia
    http://rust.wikia.com/api/v1/Articles/List?limit=10000

api call voor de details van een artikel
    http://rust.wikia.com/api/v1/Articles/AsSimpleJson?id=[pageid]
deze is nodig om de infobox details te krijgen
    http://rust.wikia.com/api.php?action=parse&pageid=[pageid]&section=[0&1]&prop=wikitext
    http://rust.wikia.com/api.php?action=parse&pageid=[pageid]&section=1&prop=wikitext
    http://rust.wikia.com/api.php?action=parse&pageid=[pageid]&section=0&prop=wikitext

op het ip correct terug te krijgen uit database
SELECT INET_NTOA(`ip`) as ip FROM `Servercore`

http://rust.wikia.com/api/v1/Articles/AsSimpleJson?id=3163
-->

<?php

/*

 variable met id en naam
 Tools

2069 Hatchet
2184 Flare
2638 Pick Axe
3163 Timed Explosive Charge
3656 Rock
8542 Torch
8825 Stone Pick Axe
8835 Hammer
9037 Salvaged Axe
9241 Salvaged Icepick
9543 Supply Signal
14841 Satchel Charge
17381 Binoculars
19145 Chainsaw


*/









$hatchet = 2069;
$flare = 2184;
$pickAxe = 2638;
$timedExplosiveCharge = 3163;
$rock = 3656;
$torch = 8542;
$stonePickAxe = 8825;
$hammer = 8835;
$salvagedAxe = 9037;
$salvagedIcepick = 9241;
$supplySignal = 9543;
$satchelCharge = 14841;
$binoculars = 17381;
$chainsaw = 19145;


$json_url = "http://rust.wikia.com/api/v1/Articles/Details?ids=2069%2C2184%2C2638%2C3163%2C3656%2C8542%2C8825%2C8835%2C9037%2C9241%2C9543%2C14841%2C17381%2C19145";
$json_string = file_get_contents($json_url);
$parsed_json = json_decode($json_string,true);

$toolsId        = $parsed_json['items'][$hatchet]['id'];
$toolsTitle     = $parsed_json['items'][$hatchet]['title'];
$toolsAbstract  = $parsed_json['items'][$hatchet]['abstract'];
$toolsThumbnail = $parsed_json['items'][$hatchet]['thumbnail'];

$toolsId        = $parsed_json['items'][$flare]['id'];
$toolsTitle     = $parsed_json['items'][$flare]['title'];
$toolsAbstract  = $parsed_json['items'][$flare]['abstract'];
$toolsThumbnail = $parsed_json['items'][$flare]['thumbnail'];

$toolsId        = $parsed_json['items'][$pickAxe]['id'];
$toolsTitle     = $parsed_json['items'][$pickAxe]['title'];
$toolsAbstract  = $parsed_json['items'][$pickAxe]['abstract'];
$toolsThumbnail = $parsed_json['items'][$pickAxe]['thumbnail'];

$toolsId        = $parsed_json['items'][$timedExplosiveCharge]['id'];
$toolsTitle     = $parsed_json['items'][$timedExplosiveCharge]['title'];
$toolsAbstract  = $parsed_json['items'][$timedExplosiveCharge]['abstract'];
$toolsThumbnail = $parsed_json['items'][$timedExplosiveCharge]['thumbnail'];

$toolsId        = $parsed_json['items'][$rock]['id'];
$toolsTitle     = $parsed_json['items'][$rock]['title'];
$toolsAbstract  = $parsed_json['items'][$rock]['abstract'];
$toolsThumbnail = $parsed_json['items'][$rock]['thumbnail'];

$toolsId        = $parsed_json['items'][$torch]['id'];
$toolsTitle     = $parsed_json['items'][$torch]['title'];
$toolsAbstract  = $parsed_json['items'][$torch]['abstract'];
$toolsThumbnail = $parsed_json['items'][$torch]['thumbnail'];

$toolsId        = $parsed_json['items'][$stonePickAxe]['id'];
$toolsTitle     = $parsed_json['items'][$stonePickAxe]['title'];
$toolsAbstract  = $parsed_json['items'][$stonePickAxe]['abstract'];
$toolsThumbnail = $parsed_json['items'][$stonePickAxe]['thumbnail'];

$toolsId        = $parsed_json['items'][$hammer]['id'];
$toolsTitle     = $parsed_json['items'][$hammer]['title'];
$toolsAbstract  = $parsed_json['items'][$hammer]['abstract'];
$toolsThumbnail = $parsed_json['items'][$hammer]['thumbnail'];

$toolsId        = $parsed_json['items'][$salvagedAxe]['id'];
$toolsTitle     = $parsed_json['items'][$salvagedAxe]['title'];
$toolsAbstract  = $parsed_json['items'][$salvagedAxe]['abstract'];
$toolsThumbnail = $parsed_json['items'][$salvagedAxe]['thumbnail'];

$toolsId        = $parsed_json['items'][$salvagedIcepick]['id'];
$toolsTitle     = $parsed_json['items'][$salvagedIcepick]['title'];
$toolsAbstract  = $parsed_json['items'][$salvagedIcepick]['abstract'];
$toolsThumbnail = $parsed_json['items'][$salvagedIcepick]['thumbnail'];

$toolsId        = $parsed_json['items'][$supplySignal]['id'];
$toolsTitle     = $parsed_json['items'][$supplySignal]['title'];
$toolsAbstract  = $parsed_json['items'][$supplySignal]['abstract'];
$toolsThumbnail = $parsed_json['items'][$supplySignal]['thumbnail'];

$toolsId        = $parsed_json['items'][$satchelCharge]['id'];
$toolsTitle     = $parsed_json['items'][$satchelCharge]['title'];
$toolsAbstract  = $parsed_json['items'][$satchelCharge]['abstract'];
$toolsThumbnail = $parsed_json['items'][$satchelCharge]['thumbnail'];

$toolsId        = $parsed_json['items'][$binoculars]['id'];
$toolsTitle     = $parsed_json['items'][$binoculars]['title'];
$toolsAbstract  = $parsed_json['items'][$binoculars]['abstract'];
$toolsThumbnail = $parsed_json['items'][$binoculars]['thumbnail'];

$toolsId        = $parsed_json['items'][$chainsaw]['id'];
$toolsTitle     = $parsed_json['items'][$chainsaw]['title'];
$toolsAbstract  = $parsed_json['items'][$chainsaw]['abstract'];
$toolsThumbnail = $parsed_json['items'][$chainsaw]['thumbnail'];



$servername = "localhost";
$username = "gbclan";
$password = "Gbclan01!";
$dbname = "gbclan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO wiki (toolsId,  
toolsTitle, toolsAbstract, toolsThumbnail)
VALUES ('$toolsId', '$toolsTitle', '$toolsAbstract','$toolsThumbnail')";

$sql = "INSERT INTO wiki (toolsId, toolsTitle, toolsAbstract, toolsThumbnail)
VALUES ('$toolsId', '$toolsTitle' , '$toolsAbstract','$toolsThumbnail')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


//Server core

//$title          = $parsed_json['sections']['0']['title'];
//$info           = $parsed_json['sections']['0']['content']['2']['text'];
//
//
//
//
//echo $title;
//echo "<br>";
//echo $info;

//$json = file_get_contents('http://rust.wikia.com/api/v1/Articles/List?limit=10000');
//$obj = json_decode($json);
//echo $obj->access_token;

