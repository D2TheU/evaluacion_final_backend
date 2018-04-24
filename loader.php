<?php
$cityOptions = array();
$typeOptions = array();

$data = json_decode(file_get_contents("data-1.json"), true);

foreach ($data as $propertyKey => $property) {
    foreach ($property as $infoKey => $info) {
        if ($infoKey == 'Ciudad') {
            if (!in_array($info, $cityOptions)) {
                $cityOptions[] = $info;
            }
        } elseif ($infoKey == 'Tipo') {
            if (!in_array($info, $typeOptions)) {
                $typeOptions[] = $info;
            }
        }
    }
}
sort($cityOptions);
sort($typeOptions);
