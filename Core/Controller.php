<?php 
namespace App\Core;
session_start();

use App\Configuration;
use App\Core\DatabaseConnection;
use App\Models\MailerModel;

class  Controller {

  private $dbConnection;
  private $data;
  private $mailer;
  public function __construct(DatabaseConnection $dbConnection, MailerModel $mailer)
  {
    $this->dbConnection = $dbConnection;
    $this->data = [];
    $this->setConfiguration();
    $this->mailer = $mailer;
  }


  public function getMailer() {
    return $this->mailer;
  }

  protected function set($name, $value) {

    $result = false;

    if(preg_match('/^[a-z][a-z0-9]+([A-Z][a-z0-9]*)*$/',$name)) {
      $this->data[$name] = $value;
      $result = true;
    }

    return $result;
  }
  public function getData() {

    return $this->data;
  }
  final protected function getConnection() : DatabaseConnection {

    return $this->dbConnection;
  }

  public function setUser() {

    if(isset($_SESSION['user'])) {
      $this->set('user', $_SESSION['user']);
    }
  }
  public function setConfiguration() {
    $this->set('path', Configuration::path);
  }
  protected function isAuthenticated() {
    if(!isset($_SESSION['user'])) {
          $this->redirect(Configuration::path.'users/login');
          return;
    }
  }

  protected function adminRole() {
   if(!isset($_SESSION['user'])) {
    $this->redirect(Configuration::path.'users/login');
    return;
   }

   $role = $_SESSION['user']->role;

   if($role != 'admin') {
    $this->redirect(Configuration::path.'category');
   }

  }
  public function redirect($path, $code = 303) {
    header("Location: $path", true ,$code);
  }


}