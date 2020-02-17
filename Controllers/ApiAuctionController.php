<?php


namespace App\Controllers;

use App\Core\ApiController;
use App\Models\AuctionModel;
use App\Models\OfferModel;
use App\Models\UsersModel;

class ApiAuctionController extends ApiController {



    public function delete() {
        $auctionModel = new AuctionModel($this->getConnection());
       $auctionId = filter_input(INPUT_POST, 'auctionId', FILTER_SANITIZE_STRING);
       $auction = $auctionModel->getById($auctionId);
       if(!$auction) {
        $this->set('data', [
      
          'code' => 404,
          'message' => 'This auction not found!'
         ]);
         return;
       } 
    
       $auctionModel->delete($auctionId);
       $this->set('data', [
          'code' => 200
       ]);      
       return;
    }
public function searchAuction() {
    $searchWord = filter_input(INPUT_POST, 'searchWord', FILTER_SANITIZE_STRING);
    $order = filter_input(INPUT_POST, 'order', FILTER_SANITIZE_STRING);
    $priceMax = filter_input(INPUT_POST, 'priceMax', FILTER_SANITIZE_STRING);
    $priceMin = filter_input(INPUT_POST, 'priceMin', FILTER_SANITIZE_STRING);
   $categoryId = filter_input(INPUT_POST, 'categoryId', FILTER_SANITIZE_STRING);



   $auctionModel = new AuctionModel($this->getConnection());
   $params = (object)[
    'searchWord' =>$searchWord,
    'order' =>$order,
    'priceMax' =>$priceMax,
    'priceMin' =>$priceMin,
    'categoryId' =>$categoryId,
   ];
$auctions = $auctionModel->research($params);
    $this->set('auctions',$auctions);   
}
  
 
}