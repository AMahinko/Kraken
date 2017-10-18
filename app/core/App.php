<?php

class App
{

  protected $controller = 'pages';

  protected $method = 'gallery';




  public function __construct()
  {
    $url = $this->getUrl();
    if (file_exists('./app/controllers/' . $url[1] . '.php'))
    {
      $this->contoller = $url[1];
      require_once ('./app/controllers/' . $this->controller . '.php');
    }
    else {
      if ($url[1] == null) {
        require_once "./app/views/gallery/gallery.html.php";
        exit;
      }
      require_once './404.php';
      exit;
    }

    if (method_exists($this->controller, $url[2]))
    {
      $this->method = $url[2];
    }
    else {
      require_once './404.php';
      exit;
    }
    call_user_func_array([$this->controller, $this->method], []);
  }




  //Routes Handling
  public function getUrl()
  {
    return explode('/', $_SERVER['REQUEST_URI']);
    // echo print_r($request);

  }

}
