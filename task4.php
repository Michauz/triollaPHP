<?php
function findLastKey($array, $value) {
    $keys = array_keys($array, $value, true);
    if (count($keys) > 0) {
        return $keys[count($keys) - 1];
    } else {
        return null;
    }
}

?>