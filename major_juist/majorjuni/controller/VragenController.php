<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/VragenDAO.php';

class vragenController extends Controller {

  private $vragenDAO;

  function __construct() {
    $this->vragenDAO = new vragenDAO();
  }

  public function vragen() {
    if(!empty($_POST)) {
      $this->handleVragen();
    }
  }

  private function handleVragen() {
    $errors = array();

    $data = array(
      'naam' => $_POST['naam'],
      'email' => $_POST['email'],
      'vraag' => $_POST['vraag']
    );
    $errors = $this->vragenDAO->validate($data);
    if (empty($errors)) {
      $insertedvragen = $this->vragenDAO->insert($data);
      if(!empty($insertedvragen)) {
        $_SESSION['info'] = 'Bedankt voor uw vraag. We beantwoorden ze zo snel mogelijk!';
        header('Location: index.php');
        exit();
      }
    }
    $this->set('errors', $errors);
  }
}
