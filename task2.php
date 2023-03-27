<?php
function removeNonIntegers(&$array) {
    foreach ($array as $key => $value) {
        if (!is_int($value)) {
            unset($array[$key]);
        }
    }
    $array = array_values($array);
}

?>