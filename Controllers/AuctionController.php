<?php
namespace App\Controllers;
use App\Configuration;
use App\Core\Controller;
use App\Models\AuctionModel;
use App\Models\CategoryModel;
use App\Models\ImagesModel;
use App\Models\OfferModel;
use App\Models\UsersModel;

class AuctionController extends Controller {
  public function index() {
  }
  public function create() {
    $this->isAuthenticated();
    if(isset($_SESSION['errorMsg'])) {
      $errorMsg = $_SESSION['errorMsg'];
      unset($_SESSION['errorMsg']);
      $this->set('errorMsg', $errorMsg);
    }
    if(isset($_SESSION['successMsg'])) {
      $successMsg = $_SESSION['successMsg'];
      unset($_SESSION['successMsg']);
      $this->set('successMsg', $successMsg);
    }
      $categoryModel = new CategoryModel($this->getConnection());
      $categories = $categoryModel->getAll();
      $this->set('categories', $categories);
  }
  public function store() {
    $this->isAuthenticated();
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $category_id = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $started_price = filter_input(INPUT_POST, 'started_price', FILTER_SANITIZE_STRING);
   
    $date_end =  str_replace('T', ' ',filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING));   
    $targetDir = $_SERVER['DOCUMENT_ROOT'] . Configuration::path . 'assets/img/auction/';
    $auctionModel = new AuctionModel($this->getConnection());
    $imageModel = new ImagesModel($this->getConnection());
    $started_date = date('Y-m-d H:i:s', time());
    
    
    $imageFiles = $_FILES['imageFiles'];
    $nameProperty = 'name';
    $typeProperty = 'type';
    $tmpNameProperty = 'tmp_name';
    $erorProperty = 'error';
    $sizeProperty = 'size';

    $numberOfImages = count($imageFiles[$nameProperty]);

      $niz = [];
    for( $i=0; $i < $numberOfImages; $i++) {
        $niz[] = [
            $nameProperty => $imageFiles[$nameProperty][$i],
            $typeProperty => $imageFiles[$typeProperty][$i],
            $tmpNameProperty => $imageFiles[$tmpNameProperty][$i],
            $erorProperty => $imageFiles[$erorProperty][$i],
            $sizeProperty => $imageFiles[$sizeProperty][$i],
        ];
        
    }

    

$imageFiles = $niz;



   
    $id =   $auctionModel->add([
      'user_id' => $_SESSION['user']->id,
      'title' => $title,
      'started_price' => $started_price,
      'description' => $description,
      'started_date' => $started_date,
      'end_date' => $date_end,
      'category_id' => $category_id
  ]);
  $offerModel = new OfferModel($this->getConnection());
  $offerModel->add([
    'price' => $started_price,
    'user_id' =>  $_SESSION['user']->id,
    'auction_id' => $id,
    'created_at' => $started_date
  ]);

    foreach($imageFiles as $imageFile) {
      $imageName =  time() .  filter_var($imageFile['name'], FILTER_SANITIZE_STRING);
      $targetFile = $targetDir . basename($imageName);
      $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
      if( !in_array($fileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        $_SESSION['errorMsg'] = 'Sorry, only jpg, png, jpeg, gif';
        $this->redirect(Configuration::path . 'auction/create');
        return;
      }
      if ($imageFile["size"] > 500000) {
        $_SESSION['errorMsg'] = 'Your image is too large!';
        $this->redirect(Configuration::path . 'auction/create');
        return;
    }
    if(move_uploaded_file($imageFile['tmp_name'],$targetFile)) {
      try {
      

$imageModel->add([
    'auction_id' =>$id,
    'image_path' => $imageName
]);
      }
      catch(\Exception $e) {
        $_SESSION['errorMsg'] = $e->getMessage();
        $this->redirect(Configuration::path . 'auction/create');
        return;
      }
    }
  } 
  $_SESSION['successMsg'] = 'Added auction successfully!';
  $this->redirect(Configuration::path . 'auction/create');
}
public function show($id) {
  $this->isAuthenticated();
  $auctionModel = new AuctionModel($this->getConnection());
  $auction = $auctionModel->getById($id);
  $imagesModel = new ImagesModel($this->getConnection());
  $auctionImages = $imagesModel->getAllByFieldsName(['auction_id'=>$id]);
  $auction->images = $auctionImages;
  $auction->started_price = $auctionModel->bestOfferPriceOfAuction($auction->id);
  if(!$auction) {
    $this->redirect(Configuration::path . 'category');
  }
  $user = $auctionModel->getUser($auction->user_id);
  $this->set('auction', $auction);
  $this->set('userAuction', $user);
}
public function getWinAuctionByLoggUser() {
  $this->isAuthenticated();
  $userId = $_SESSION['user']->id;
  $auctionModel = new AuctionModel($this->getConnection());
$wonAuctions =   $auctionModel->getAllEndAuctionWhereLoggUserWin($userId);
  $usersModel = new UsersModel($this->getConnection());
  $this->set('wonAuctions', $wonAuctions);
}




public function update($id) {

  $categoryModel = new CategoryModel($this->getConnection());
  $categories = $categoryModel->getAll();
  $auctionModel = new AuctionModel($this->getConnection());
  $auction = $auctionModel->getById($id);
  if($auction->user_id != $_SESSION['user']->id || !$auction) {
    $this->redirect(Configuration::path.'/category');
    return;
  }

  $this->set('auction', $auction);
  $this->set('categories', $categories);
}


public function storeUpdate($id) {

  $auctionModel = new AuctionModel($this->getConnection());

  $auction = $auctionModel->getById($id);
  if($auction->user_id != $_SESSION['user']->id || !$auction) {
    $this->redirect(Configuration::path.'/category');
    return;
  }
  
  

  $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
  $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
  $categoryId = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);


  $auctionModel->edit($id, [
      'title' => $title,
      'description' => $description,
      'category_id' => $categoryId
  ]);

  $this->redirect(Configuration::path .'auction/'.$id.'/update');
}

}