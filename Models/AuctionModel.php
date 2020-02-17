<?php
namespace App\Models;
use App\Core\Field;
class AuctionModel  extends Model{
  protected function getFields()
{
  return 
  [
    'user_id' => new Field('/^[0-9]{1,3}$/',true),
    'title' => new Field('/^[A-Za-z0-9\s]{3,50}(\s[a-z]{3,50})*$/', true),
    'started_price' => new Field('/^[0-9]{1,6}$/', true),
    'description' => new Field('/^.{3,500}$/', true),
    'image_path' => new Field('/^.{3,100}$/',true),
    'started_date' => new Field('/^.{3,100}$/',true),
    'end_date' => new Field('/^.{3,100}$/',true),
    'category_id' => new Field('/^[0-9]{1,3}$/',true)
  ];
}
public function getUser($id) {
  $usersModel = new UsersModel($this->getConnection());
  $user = $usersModel->getById($id);
  return $user;
}
public function bestOfferPriceOfAuction($id) {
  $offerModel = new OfferModel($this->getConnection());
  $query = "SELECT * FROM offer WHERE  auction_id = ? ORDER BY price DESC";
  $prep = $this->getPDO()->prepare($query);
  $res = $prep->execute([$id]);
  $bestOffers = [];
  if($res) {
      $bestOffers = $prep->fetchAll(\PDO::FETCH_OBJ);
  }
  if(isset($bestOffers[0])) {
    return $bestOffers[0]->price;
  } else {
    $auction = $this->getById($id);
    return $auction->started_price;
  }
}
public function getActiveAuction($id) {
$timestamp = time();
$formatDate = date('Y-m-d H:i:s', $timestamp);
$query = "SELECT * FROM auction WHERE user_id = ? AND end_date > ? ";
$prep = $this->getPDO()->prepare($query);
$res = $prep->execute([$id, $formatDate]);
$imagesModel = new ImagesModel($this->getConnection());
$auctions = [];
if($res) {
$auctions = $prep->fetchAll(\PDO::FETCH_OBJ);
}
foreach($auctions as $auction) {

$auctionImages = $imagesModel->getAllByFieldsName(['auction_id'=>$auction->id]);

$auction->image_path = $auctionImages[0]->image_path;
}
return $auctions;
}
public function getAllEndAuctionWhereLoggUserWin($loggUser) {
  $formatTime =$formatDate = date('Y-m-d H:i:s', time());
  $query = "SELECT * FROM auction a
  INNER JOIN (select * from 
  offer WHERE price in (select max(price) FROM offer GROUP BY auction_id)) o
  on
  a.id = o.auction_id INNER JOIN auction b ON b.id = a.id
  WHERE o.user_id = ? AND a.end_date < ?
  ";
  $prep = $this->getPDO()->prepare($query);
  $winEndAuctions = [];
  $res = $prep->execute([$loggUser,$formatTime]);
  if($res) {
    $winEndAuctions = $prep->fetchAll(\PDO::FETCH_OBJ);
  }

  $usersModel = new UsersModel($this->getConnection());
foreach($winEndAuctions as $auction) {
    $owner = $usersModel->getById($auction->user_id);
   $auction->owner = (object)[
     'firstname' =>$owner->firstname,
     'phonenumber' =>$owner->phonenumber,
     'town' => $owner->town,
     'email' => $owner->email
   ];
}
  return $winEndAuctions;
}
public function getAllEndAuctionWhereLoggUserWinToUserProfile($userId, $loggId) {
  $formatTime =$formatDate = date('Y-m-d H:i:s', time());
  $query = "SELECT *, o.user_id as winner FROM auction a INNER JOIN (SELECT *, MAX(price) as maxx FROM offer GROUP BY id ORDER BY MAX(price)) o
  on a.id = o.auction_id 
  WHERE a.user_id = ? AND a.end_date  < ?
  GROUP BY a.id
  ";  
  $prep = $this->getPDO()->prepare($query);
  $endAuctions = [];
  $res = $prep->execute([$userId,$formatTime]);
  if($res) {
    $endAuctions = $prep->fetchAll(\PDO::FETCH_OBJ);
  }
  $endAuctions = array_filter($endAuctions, function($auction) use ($loggId) {
                      return $auction->winner == $loggId;    
  });
  
    return $endAuctions;
}
public function research($data) {
$values = [];
$query = "SELECT a.*, MAX(o.price) as maxPrice FROM auction a INNER JOIN offer o ON a.id = o.auction_id WHERE 1 = 1 AND  (LOWER(a.description) LIKE LOWER('%".$data->searchWord."%') ";
$query .=  "OR LOWER(a.title) LIKE  LOWER('%".$data->searchWord."%'))";
if($data->categoryId != 0) {
  $query .= " AND  category_id = ?";
  $values[] = $data->categoryId;
}
$query .= " GROUP BY a.id";
if(preg_match('/^[1-9][0-9]{0,10}$/', $data->priceMin) && preg_match('/^[1-9][0-9]{0,10}$/', $data->priceMax)) {
  $query .= " HAVING MAX(o.price) BETWEEN ? AND ?";
  $values[] = $data->priceMax;
  $values[] = $data->priceMin;
} else if (preg_match('/^[1-9][0-9]{0,10}$/', $data->priceMin)) {
  $query .= " HAVING MAX(o.price) > ? ";
  $values[] = $data->priceMin;
} else if (preg_match('/^[1-9][0-9]{0,10}$/', $data->priceMax)) {
  $query .= " HAVING MAX(o.price) < ? ";
  $values[] = $data->priceMax;
}
if(preg_match('/^ASC|DESC$/', $data->order)) {
  $query .= " ORDER BY MAX(o.price) " . $data->order;
} else {
  $query .= " ORDER BY MAX(o.price) ASC ";
}
 $prepare = $this->getPDO()->prepare($query);
  $res = $prepare->execute($values);
 $auctions = [];

 if($res) {
   $auctions = $prepare->fetchAll(\PDO::FETCH_OBJ);
 }


 return $auctions;
}

}