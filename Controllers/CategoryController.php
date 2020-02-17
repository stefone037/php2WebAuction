<?php


namespace App\Controllers;

use App\Configuration;
use App\Core\Controller;
use App\Models\AuctionModel;
use App\Models\CategoryModel;
use App\Models\ImagesModel;
use App\Models\UsersModel;
class CategoryController extends Controller {





  public function index() {
    $this->isAuthenticated();
    $categoryModel = new CategoryModel($this->getConnection());
    $categories = $categoryModel->getAll();
    $auction = new AuctionModel($this->getConnection());
    $auctionsToDisplay = [];
    foreach($categories as $category) {
        
        $auctions = $auction->getAllByFieldsName(['category_id'=>$category->id]);
        if(count($auctions <=3)) {
          $category->auctions = $auctions;
        } else {
          $auctionsForDisplay = [];
          for($i=0; i < 3; $i++) {
            $randomNumber = random(0, count($auctions));
              $auctionsForDisplay[] = $auctions[$randomNumber];
          }
          $category->auctions = $auctionsForDisplay; 
        }
    }
    $this->set('categories', $categories);

  }



  public function show($id) {
    $this->isAuthenticated();
    $categoryModel = new CategoryModel($this->getConnection());
    $category = $categoryModel->getById($id);
    $imagesModels =  new ImagesModel($this->getConnection());
    if(!$category) {
          $this->redirect(Configuration::path . 'category');
    }
    $auctionModel = new AuctionModel($this->getConnection());

    $userModel = new UsersModel($this->getConnection());
    $auctionOfCategory = $auctionModel->getAllByFieldsName(['category_id' => $id]);
    foreach($auctionOfCategory as $auction) {
      $user = $userModel->getById($auction->user_id);
      $auctionImages = $imagesModels->getAllByFieldsName(['auction_id' => $auction->id]);
      $auction->image_path = $auctionImages[0]->image_path;
      $auction->started_price = $auctionModel->bestOfferPriceOfAuction($auction->id);
      $auction->user = $user;
    } 
    
    $this->set('category', $category);
    $this->set('auctions', $auctionOfCategory);
  }
}