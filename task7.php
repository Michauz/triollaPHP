<?php

function sortByPriceAscending(string $jsonString) 
{
    $items = json_decode($jsonString, true);

    usort($items, function($a, $b) {
        if ($a['price'] == $b['price']) {
            return strcmp($a['name'], $b['name']);
        }
        return $a['price'] - $b['price'];
    });

    return json_encode($items);
}

?>