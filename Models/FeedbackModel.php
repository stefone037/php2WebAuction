<?php

namespace App\Models;

use App\Core\Field;

class FeedbackModel  extends Model{


  protected function getFields()
{
  return 
  [
    'sender_id' => new Field('/[1-9][0-9]{0,10}/', true),
    'reciver_id' => new Field('/[1-9][0-9]{0,10}/', true),
    'feedback_text' => new Field('/^.{3,255}$/', true),
    'created_at' => new Field('/^.{3,100}$/',true),
    'auction_id' => new Field('/[1-9][0-9]{0,10}/', true),
  ];
}


public function getAllReciveFeedback($id) {


  $feedbacks = $this->getAllByFieldsName(['reciver_id' => $id]);

  return $feedbacks;

}



}