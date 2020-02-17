<?php


namespace App\Controllers;

use App\Core\ApiController;
use App\Models\AuctionModel;
use App\Models\UsersModel;

class ApiUsersController extends ApiController {
    
 public function delete() {

  $usersModel = new UsersModel($this->getConnection());
  $auctionModel = new AuctionModel($this->getConnection());
 $userId = filter_input(INPUT_POST, 'userId', FILTER_SANITIZE_STRING);
 $user = $usersModel->getById($userId);

 $auctions = $auctionModel->getAllByFieldsName(['user_id'=> $userId]);

 if(!$user) {
  $this->set('data', [

    'code' => 404,
    'message' => 'This user not found!'
   ]);
   return;
 } 

 if(count($auctions) > 0) {
   $this->set('data', [

    'code' => 409,
    'message' => 'This user have auction, sorry you can not delete him!'
   ]);
   return;
 }

 $usersModel->delete($userId);

 $users = $usersModel->getAll();
 $this->set('data', [
    'code' => 200
 ]);

 return;
 }



 
}