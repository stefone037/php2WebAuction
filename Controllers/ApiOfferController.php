<?php


namespace App\Controllers;

use App\Core\ApiController;
use App\Models\AuctionModel;
use App\Models\OfferModel;
use App\Models\UsersModel;

class ApiOfferController extends ApiController {


  public function addOffer() {
  

    $auctionModel = new AuctionModel($this->getConnection());
    $auctionOffer = filter_input(INPUT_POST, 'auctionOffer', FILTER_SANITIZE_STRING);
    $offerModel = new OfferModel($this->getConnection());
    $auctionId = filter_input(INPUT_POST, 'auctionId', FILTER_SANITIZE_STRING);
    $time = date('Y-m-d H:i:s', time());
    $bestOfferPriceAuction = $auctionModel->bestOfferPriceOfAuction($auctionId);


    if(!($auctionOffer-5 >= $bestOfferPriceAuction)) {
      $this->set('data', (object)[
          'code' => 409,
          'message' => 'Your offer must be more or equal to ' . $bestOfferPriceAuction . '$'
      ]);

      return;
    }
    try {
      $offerModel->add([
          'price' => $auctionOffer,
          'user_id' => $_SESSION['user']->id,
          'auction_id' => $auctionId,
          'created_at' => $time
      ]);
    } catch(\Exception $e) {
      $this->set('data', (object)[
        'code' => 409,
        'message' => $e->getMessage()
    ]);
    return;
    }
    $this->set('data', (object)[
      'code' => 204,
      'message' => 'You have successfully submitted your offer!
      '
  ]);
  return;
  }
 
}