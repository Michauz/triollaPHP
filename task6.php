<?php

function numbersToLetters($str){
    $result = "";
    $conversionTable = [];
    for ($i=1,$j='A';$i<=26;$i++,$j++) {
        $conversionTable[$i] = $j;
    }
    $conversionTable["+"] = " ";
    $str = str_replace("+"," + ",$str);
    $strArr = explode(" ", $str);
    for ($i=0; $i < count($strArr); $i++) {
        $result .= $conversionTable[$strArr[$i]];
    }
    return $result;    
}

?>