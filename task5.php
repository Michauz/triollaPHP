<?php
class CropRatio
{
    private $totalWeight;
    private $crops = [];
 
    public function add(string $name, int $cropWeight) : void
    {
        if(!array_key_exists($name, $this->crops)) {
            $this->crops[$name] = 0;
        }
 
        $this->crops[$name] += $cropWeight;
        $this->totalWeight += $cropWeight;
    }
 
    public function proportion(string $name) : float
    {
        if(!array_key_exists($name, $this->crops)) {
            return 0;
        }
        return $this->crops[$name] / $this->totalWeight;
    }
}

?>