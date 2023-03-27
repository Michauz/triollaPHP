<?php
class Person {
    public float $height;
    public float $weight;
  
    function __construct($height,$weight) {
      $this->height = $height;
      $this->weight = $weight;
    }
    public static function averageHeight($personArray){
      $averageResult = 0;
      for($i=0;$i<count($personArray);$i++){
          $averageResult += $personArray[$i]->height;
      }
      if (count($personArray)){
          return ($averageResult/count($personArray));
      }
      return 0;
    }
    
}

?>