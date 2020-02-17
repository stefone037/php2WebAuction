<?php


namespace App\Controllers;

use App\Core\ApiController;
use App\Models\AuctionModel;
use App\Models\CategoryModel;
use App\Models\FeedbackModel;
use App\Models\OfferModel;
use App\Models\UsersModel;

class ApiFeedbackController extends ApiController {


  public function add() {

    $feedbackModel = new FeedbackModel($this->getConnection());
    $reciverId = filter_input(INPUT_POST, 'reciverId', FILTER_SANITIZE_STRING);
    $senderId = filter_input(INPUT_POST, 'senderId', FILTER_SANITIZE_STRING);
    $impression  = filter_input(INPUT_POST, 'impression', FILTER_SANITIZE_STRING);
    $auctionId  = filter_input(INPUT_POST, 'auctionId',  FILTER_SANITIZE_STRING);
    $created_at = date("Y-m-d", time());


    
    try {
          $feedbackModel->add(
            [
              'sender_id' => $senderId,
              'reciver_id' => $reciverId,
              'feedback_text' => $impression,
              'created_at' => $created_at,
              'auction_id' => $auctionId,
            ]
          );

    } catch(\Exception $e) {
        $message = $e->getMessage();

        $this->set('data', [
              'code' => 409,
              'message' => $message
        ]);
      return;
    }

    $feedbacks = $feedbackModel->getAllReciveFeedback($reciverId);
    $userModel = new UsersModel($this->getConnection());
    $auctionModel = new AuctionModel($this->getConnection());
    foreach($feedbacks as $feedback) {
      $sender = $userModel->getById($feedback->sender_id);
      $auction = $auctionModel->getById($feedback->auction_id);
      $feedback->sender = (object)[
          'firstname' => $sender->firstname,
          'lastname' => $sender->lastname
      ];
  
      $feedback->auction = (object)[
        'title' => $auction->title, 
    ];
    }


    $this->set('data', [
      'code' => 200,
      'feedbacks' => 
          $feedbacks
    ]);
  }


  

  
 
}