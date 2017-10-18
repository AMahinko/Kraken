<?php

class Pages extends Controller
{

  public function gallery()
  {
    include_once './app/views/gallery/gallery.html.php';
  }

  public function list()
  {
    include_once './app/views/list/list.html.php';
  }

}
