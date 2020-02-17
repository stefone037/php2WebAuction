<?php
namespace App\Controllers;
use App\Configuration;
use App\Core\Controller;
use App\Models\AuctionModel;
use App\Models\FeedbackModel;
use App\Models\UsersModel;
class UsersController  extends Controller {
  public function home() {
    $usersController = new UsersModel($this->getConnection());
    $users = $usersController->getAll();
    $this->set('users', $users);
  }
  public function index() {   
  }
  public function show($id) {
    $this->isAuthenticated();
$userModel = new UsersModel($this->getConnection());
$user = $userModel->getById($id);
if(!$user) {
  $this->redirect(Configuration::path . 'category');
}
$this->set('id', $id);
$this->set('userprofile', $user);
    $auctionModel = new AuctionModel($this->getConnection());
  $activeAuctions =   $auctionModel->getActiveAuction($id);
   $feedbackModel = new FeedbackModel($this->getConnection());
  $feedbacks =  $feedbackModel->getAllReciveFeedback($id);
  $loggUserId = $_SESSION['user']->id;
  foreach($feedbacks as $feedback) {
    $sender = $userModel->getById($feedback->sender_id);
    $auction = $auctionModel->getById($feedback->auction_id);
    $feedback->sender = (object)[
        'firstname' => $sender->firstname,
        'lastname' => $sender->lastname
    ];

    $feedback->auction = (object)[
      'title' => $auction->title
  ];
  }
  $endAuctionLoggUserWin =  $auctionModel->getAllEndAuctionWhereLoggUserWinToUserProfile($id,$loggUserId);
  $this->set('auctions', $activeAuctions);
  $this->set('feedbacks', $feedbacks);
  $this->set('endauctions', $endAuctionLoggUserWin);
  }
  public function update() {
    $this->isAuthenticated();
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);   
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);    
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING); 
    $phonenumber = filter_input(INPUT_POST, 'phonenumber', FILTER_SANITIZE_STRING); 
    $town = filter_input(INPUT_POST, 'town', FILTER_SANITIZE_STRING); 
    $usersModel = new UsersModel($this->getConnection());
    if($id !== $_SESSION['user']->id) {
      $this->redirect(Configuration::path.'users/'.$id);
      return;
    }
    try {
      $usersModel->edit($id,[
        'email' => $email,
          'firstname' => $firstname,
          'lastname' =>$lastname,
          'phonenumber'=>$phonenumber,
          'town' =>$town
      ]);
    } catch(\Exception $e) {
      var_dump($e->getMessage());
    }
    $user = $usersModel->getById($id);
    
    $_SESSION["user"] = $user;
    $this->redirect(Configuration::path.'users/'.$id);
  }
}