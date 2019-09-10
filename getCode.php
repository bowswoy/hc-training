<?php
$json = file_get_contents('map.json');
$array = json_decode($json, true);
$data = [];
foreach($array['features'] as $a) {
    $data[] = array($a['properties']['hc-key'], rand(50,300));
}

echo '<pre>';
print_r($data);
echo '</pre>';