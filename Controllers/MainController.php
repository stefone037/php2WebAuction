<?php 

namespace App\Controllers;

use App\Configuration;
use App\Core\Controller;
use App\Models\RoleModel;
use App\Models\UsersModel;
class MainController extends Controller {
  public function index() {
   $usersController = new UsersModel($this->getConnection());
  }
  public function getRegister() {
    if(isset($_SESSION['errorMessage'])) {
      $errorMessage = $_SESSION['errorMessage'];
      unset($_SESSION['errorMessage']);
      $this->set('errorMessage', $errorMessage ); 
    }
  }
  public function postRegister() {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $confirmPassword = filter_input(INPUT_POST, 'confirmPassword', FILTER_SANITIZE_STRING);
    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $town = filter_input(INPUT_POST, 'town', FILTER_SANITIZE_STRING);
    $phoneNumber = filter_input(INPUT_POST, 'phonenumber', FILTER_SANITIZE_STRING);

   
    $created_at = date('Y-m-d', time());
    if($password != $confirmPassword) {
      $_SESSION['errorMessage'] = 'Please confirm your password.';
      $this->redirect(Configuration::path.'users/register/');
      return;
    }
    $usersModel = new UsersModel($this->getConnection());


    $user = $usersModel->getAllByFieldsName(['email' => $email]);
    if(count($user) > 0) {
      $_SESSION['errorMessage'] = 'Your email has been already used!';
      $this->redirect(Configuration::path.'users/register/');
      return;
    }
      $activatedCode = md5(time());
    try {
      $usersModel->add([
        'email' => $email,
        'password' => md5($password),
        'firstname' => $firstName,
        'lastname' => $lastName,
        'town' =>$town,
        'created_at' => $created_at,
        'phonenumber' => $phoneNumber,
        'activated_code' => $activatedCode,
        'role_id' => 2
  ]);
    } catch(\Exception $e) {
    
      $_SESSION['errorMessage'] = $e->getMessage();
     $this->redirect(Configuration::path.'users/register/');
     return;
    }

    $this->getMailer()->sendmail($email, $activatedCode);
          $this->set('message', 'Success registration, confirm your email!');
  }
  public function getLogin() {

    
    if(isset($_SESSION['loginError'])) {
      $errorMessage = $_SESSION['loginError'];
      unset($_SESSION['loginError']);
      $this->set('errorMessage', $errorMessage);
    }
  }
  public function postLogin() {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password =filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $usersModel = new UsersModel($this->getConnection());
    $user = $usersModel->getAllByFieldsName(['email' => $email]);
    if(!$user) {
      $_SESSION['loginError'] = 'Invalid email or password';
      $this->redirect(Configuration::path.'users/login');
      return;
    }


    if($user[0]->activated != 1 ) {
      $_SESSION['loginError'] = 'Invalid email or password';
      $this->redirect(Configuration::path.'users/login');
      return;
    }
     
    
    if(  $user[0]->password != md5($password)) {
      $_SESSION['loginError'] = 'Invalid email or password';
      $this->redirect(Configuration::path.'users/login');
      return;
    }
    $roleModel = new RoleModel($this->getConnection());
    $role =  $roleModel->getById($user[0]->role_id);
    $user[0]->role = $role->name;
    $_SESSION['user'] = $user[0];
    $this->redirect(Configuration::path.'category/');
  }
  public function postLogout() {
      unset($_SESSION['user']);
      $this->redirect(Configuration::path.'users/login');
  }



  public function activateAccount($acountCode) {
    $usersModel = new UsersModel($this->getConnection());
    $users = $usersModel->getAllByFieldsName(['activated_code' => $acountCode]);
    if(count($users) == 0) {
      $this->set('activated', 'denied');
      return;
    }
    $usersModel->activateAccount($users[0]->id);
    $this->set('activated', 'success');
  } 
}