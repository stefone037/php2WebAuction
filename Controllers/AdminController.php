<?php


namespace App\Controllers;

use App\Core\Controller;
use App\Models\AuctionModel;
use App\Models\CategoryModel;
use App\Models\ImagesModel;
use App\Models\UsersModel;

class AdminController extends Controller {
  public function categories() {
    $this->adminRole();
      $categoryModel = new CategoryModel($this->getConnection());
      $categories = $categoryModel->getAll();

      $this->set('categories', $categories);
  }

  public function users() {
    $this->adminRole();
    $usersModel = new UsersModel($this->getConnection());
    $users = $usersModel->getAll();
    $this->set('users', $users);
}
public function auctions() {
  $this->adminRole();
  $categoryModel = new CategoryModel($this->getConnection());
  $imagesModels =  new ImagesModel($this->getConnection());
  $auctionModel = new AuctionModel($this->getConnection());
  $userModel = new UsersModel($this->getConnection());
  $auctions = $auctionModel->getAll();
  foreach($auctions as $auction) {
    $category = $categoryModel->getById($auction->category_id);

    $user = $userModel->getById($auction->user_id);
    $auctionImages = $imagesModels->getAllByFieldsName(['auction_id' => $auction->id]);
    $auction->image_path = $auctionImages[0]->image_path;
    $auction->started_price = $auctionModel->bestOfferPriceOfAuction($auction->id);
    $auction->user = $user;
    $auction->category = $category;
  }
  $this->set('auctions', $auctions);
}
  


    
 



 
}