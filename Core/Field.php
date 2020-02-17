<?php


namespace App\Core;



class Field {

private $pattern;
private $editable;


public function __construct(string $pattern, bool $editable)
{
  
  $this->pattern = $pattern;
  $this->editable = $editable;
}





public function isEditable() :bool {
  return $this->editable;
}



public function isValid($value) {
    if(!$this->editable) {
      return false;
    }
    return boolval(preg_match($this->pattern, $value));

}


}