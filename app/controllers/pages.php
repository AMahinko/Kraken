<?php
class Pages extends Controller
{

  public function gallery()
  {
    include_once './app/views/gallery/gallery.html.php';
  }

  public function list()
  {
    // $this->model = new Content('panelPageContent');
    $json = file_get_contents('./app/panelPageContent.json');
    $contentsArray = json_decode($json, true);
    include_once './app/views/list/list.html.php';
    // echo $content;
  }


}
