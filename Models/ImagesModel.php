<?php

namespace App\Models;

use App\Core\DatabaseConnection;
use App\Core\Field;
class ImagesModel extends Model {
protected function getFields()
{
  return 
  [
    'auction_id' => new Field('/[1-9][0-9]{0,10}/', true),
    'image_path' =>  new Field ('/^.{3,100}$/',true)
  ];
}

}