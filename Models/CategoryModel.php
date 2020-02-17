<?php

namespace App\Models;

use App\Core\Field;
class CategoryModel  extends Model{


  protected function getFields()
{
  return 
  [
    'name' => new Field('/^[a-zA-Z0-9]{3,50}(\s[a-zA-Z0-9]{3,50})*$/', true),
    'description' => new Field('/^.{3,255}$/', true),
    'image_path' => new Field('/^.{3,100}$/',true)
  ];
}




}