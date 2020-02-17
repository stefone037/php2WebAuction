<?php

namespace App\Models;

use App\Core\DatabaseConnection;
use App\Core\Field;
class OfferModel extends Model {

protected function getFields()
{
   return 
  [
    'price' => new Field('/^[1-9][0-9]{0,11}$/', true),
    'user_id' => new Field('/[1-9][0-9]{0,10}/', true),
    'auction_id' => new Field('/^[1-9][0-9]{0,10}$/', true),
    'created_at' =>  new Field ('/^.{3,100}$/',true)
  ];
}
}