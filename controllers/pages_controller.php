<?php
  class PagesController {
    public function home() {
      $first_name = 'Marian';
      $last_name  = 'Sloot';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
