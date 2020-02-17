  <?php
  require_once 'vendor/autoload.php';
  use App\Core\DatabaseConfiguration;
  use App\Core\DatabaseConnection;
  use App\Configuration;
  use App\Controller;
  use App\Core\Router;
use App\Models\MailerModel;

$dbConfiguration = new DatabaseConfiguration(
        Configuration::DBHOST,
        Configuration::USER,
        Configuration::PASWORD,
        Configuration::DBNAME
      );
      
      ob_start();
      $url = strval(filter_input(INPUT_GET, 'url'));
      $requestedMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
      $router = new Router();
      $routes = require_once('Routes.php');
      foreach($routes as $route) {
        $router->add($route);
      }
      $mailer = new MailerModel();
      $dbConnection = new DatabaseConnection($dbConfiguration);
      $route = $router->find($url, $requestedMethod);
      $data = $route->extractArguments($url);
     $controllerName = 'App\\Controllers\\'.$route->getControllerName() . 'Controller';
     $controller = new $controllerName($dbConnection,$mailer);

     if(!$controller instanceof App\Core\ApiController) {
      $controller->setUser();
     }
    
      call_user_func_array([$controller, $route->getMethodName()], $data ?? [] );
      $data = $controller->getData();

      if($controller instanceof App\Core\ApiController) {
          ob_clean();
          
          header("Content-type:application/json;charset=utf-8");

          echo json_encode($data);

        exit;
      }
    
     $loader = new  Twig_Loader_Filesystem('./Views');
    $twig = new Twig_Environment($loader, [
    'cache' => './twig_cache',
    'auto_reload' => true
]);
echo $twig->render( $route->getControllerName() . '/' . $route->getMethodName() . '.html', $data);
?>
