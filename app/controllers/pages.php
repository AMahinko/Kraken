<?php
class Pages
{

  public function gallery()
  {
    include_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/app/views/gallery/gallery.html.php';
  }

  public function list()
  {
    realpath($_SERVER["DOCUMENT_ROOT"]);
    $json = file_get_contents(realpath($_SERVER["DOCUMENT_ROOT"]) . '/app/panelPageContent.json');
    $contentsArray = json_decode($json, true);
    include_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/app/views/list/list.html.php';
  }


}
