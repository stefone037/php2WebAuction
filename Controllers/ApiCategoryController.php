<?php


namespace App\Controllers;

use App\Core\ApiController;
use App\Models\AuctionModel;
use App\Models\CategoryModel;
use App\Models\OfferModel;
use App\Models\UsersModel;

class ApiCategoryController extends ApiController {


  public function add() {
    $categoryModel = new CategoryModel($this->getConnection());
    $categoryName = filter_input(INPUT_POST, 'categoryName', FILTER_SANITIZE_STRING);
    $this->set('categoryname', $categoryName);
    try {
      $categoryModel->add([
          'name' =>$categoryName,
          'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ",
          'image_path' => '1581702872image2.jpeg'
      ]);
    }
    catch(\Exception $e) {
        $this->set('data', [
            'code' => 409,
            'message' => $e->getMessage()
        ]);

        return;
    }

$categories = $categoryModel->getAll();

    $this->set('data', [
          'code' => 200,
          'categories' => $categories
    ]);
  }



  public function delete() {
    $categoryModel = new CategoryModel($this->getConnection());
    $auctionModel = new AuctionModel($this->getConnection());
    $categoryId = filter_input(INPUT_POST, 'categoryId', FILTER_SANITIZE_STRING);
    $auctionsOfCategory = $auctionModel->getAllByFieldsName([
      'category_id' => $categoryId
    ]);


      if(count($auctionsOfCategory) > 0) {
        $this->set('data', [
          'code' => 409,
          'message' => 'First delete auction of category!'
    ]);

    return;
      }
    $categoryModel->delete($categoryId);
    $categories = $categoryModel->getAll();
    $this->set('data', [
          'code' => 200,
          'categories' => $categories
    ]);

  }


  public function getCategory() {
    $categoryModel = new CategoryModel($this->getConnection());
    $categoryId =  filter_input(INPUT_POST, 'categoryId', FILTER_SANITIZE_STRING);
    $category = $categoryModel->getById($categoryId);

    $this->set('category', $category);
    if($category) {
      $this->set('data', [
        'code'  => 200,
        'category' =>$category
      ]);

      return;
    } else {
      $this->set('data', [
          'code' => 404,
          'message' => 'Category not found!'
      ]);

      return;
    }
  }


  public function update() {
    $categoryModel = new CategoryModel($this->getConnection());
    $id = filter_input(INPUT_POST, 'categoryId', FILTER_SANITIZE_STRING);
    $categoryName = filter_input(INPUT_POST, 'categoryName', FILTER_SANITIZE_STRING);
    $category = $categoryModel->getById($id);
    if($category) {
      $categoryModel->edit($id, [
          'name' => $categoryName,
          'description' => "Lorem ipsum dolor sit amet",
          'image_path' => "1581718577image1.jpg"
      ]);
      $categories = $categoryModel->getAll();
      $this->set('data', [
            'code' => 200,
            'categories' => $categories
      ]);
      return;
    } else {


      return;
    }
  }
    
  
 
}