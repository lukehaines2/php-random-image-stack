<?php
  echo '<script>console.log("RUNNING SESSION")</script>';
    session_start();
    function getImage() {
      $img_ids_array = array(range(%id=range_array[0]%, %id=range_array[1]%));
      shuffle($img_ids_array);

      foreach($img_ids_array as $key => $val) {
        if (!is_array($_SESSION['img'])) {
            return $val;
        } elseif (count($_SESSION['img']) >= count($img)) {
            $_SESSION['img'] = array();
        }
        if (is_array($_SESSION['img']) && !in_array($val, $_SESSION['img'])) {
            return $val;
        }
      }
  }
?>
