<?php require_once './app/views/app/app.html.php';?>
<link rel="stylesheet" href="/css/list.css">
<script type="text/javascript" src="/js/list.js"></script>




</div>

<div class="list-container">


<?php
  for ($i=0; $i < count($contentsArray) ; $i++) {
    echo '<div class="content-panel">' .
            '<img src=/assets/img-kraken.png class="logo-badge">'.
            '<div class="text-container">'.
              '<h1>'. $contentsArray[$i]["title"] . '</h1>'.
              '<p>' . $contentsArray[$i]["text"] . '</p>'.
            '</div>'.
          '</div>';
  }
?>

</div>
