<?php

class Fish
{
    public $common_name;
    public $flavor;
    public $record_weight;
  
  public function getInfo()
  {
    return "A " . $this->common_name . " is an " . $this->flavor . " flavored fish. The world record weight is " . $this->record_weight;
  }
}

$bass = new Fish();
$bass->common_name = "Largemouth Bass";
$bass->flavor = "Excellent";
$bass->record_weight = "22 pounds 5 ounces";
echo $bass->getInfo();