
<?php
$content = (array) json_decode(file_get_contents('http://rust.wikia.com/api/v1/Articles/List?limit=10000'));
foreach ($content['items'] as $item){
    $item = (array) $item;
    echo 'Raw: ';
    print_r($item);
    echo ' ID: '. $item['id'].' Title: '.$item['title'].'<br>';
}

