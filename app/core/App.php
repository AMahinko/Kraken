<?php

class App
{
      protected $controller = 'pages';

  protected $method = 'gallery';
    
  public function __construct()
  {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);

   $doc_root = $_SERVER["DOCUMENT_ROOT"]; 

    $url = $this->getUrl();
    if (file_exists($doc_root . '/app/controllers/' . $url[1] . '.php'))
    {
      $this->contoller = $url[1];
      require_once ($doc_root . '/app/controllers/' . $this->controller . '.php');
    }
    elseif       ($url[1] == null) {
        require_once $root . '/app/views/gallery/gallery.html.php';
        exit;
      }
      else {
      require_once ($doc_root. '/404.php');
      exit;
      }
    

    if (method_exists($this->controller, $url[2]))
    {
      $this->method = $url[2];
    }
    else {
      require_once $root . '/404.php';
      exit;
    }
    call_user_func_array([$this->controller, $this->method], []);
  }




  //Routes Handling
  public function getUrl()
  {
    return explode('/', $_SERVER['REQUEST_URI']);
  }

}
