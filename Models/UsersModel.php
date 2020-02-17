<?php

namespace App\Models;

use App\Core\DatabaseConnection;
use App\Core\Field;
class UsersModel extends Model {

protected function getFields()
{
  return 
  [
    'firstname' => new Field('/[a-z]{3,50}/', true),
    'lastname' => new Field('/[a-z]{3,50}/', true),
    'email' => new Field('/^[a-z][a-z0-9_.]{3,30}@[a-z][a-z0-9-]+(\.[a-z]{1,30})+$/', true),
    'password' =>  new Field ('/^.{3,100}$/',true),
    'town' => new Field('/^[A-Za-z]{3,50}$/', true),
    'phonenumber' => new Field('/^06[0-9]{8,9}$/', true),
    'created_at' => new Field('/^.{3,50}$/', true),
    'role_id' => new Field('/^[12]{1}$/', true),
    'activated_code' => new Field('/^.{3,100}$/',true)
  ];
}



public function activateAccount($id) {

  $prepare = $this->getPDO()->prepare('UPDATE users SET activated = 1 WHERE id = ?');
  $res = $prepare->execute([$id]);

  if($res) {
    return true;
  }

  return false;
}



}