<?php

require_once __DIR__ . '/Controller.php';

class homeController extends Controller {

  public function home() {
    if(!empty($_POST)) {
      $this->handleHome();
    }
  }

  private function handleHome() {
    $errors = array();
    if(isset($_POST['home'])){
      header('Location: index.php');
      exit();
    }
    if(isset($_POST['boeken'])){
      header('Location: index.php?page=betaling');
      exit();
    }
    if(isset($_POST['cruise'])){
      header('Location: index.php?page=cruise');
      exit();
    }
    if(isset($_POST['betalen'])){
      header('Location: index.php?page=betaling');
      exit();
    }
    if(isset($_POST['betalen2'])){
      header('Location: index.php?page=bedanking');
      exit();
    }
    if(isset($_POST['contact'])){
      header('Location: index.php?page=contact');
      exit();
    }
  }
}
