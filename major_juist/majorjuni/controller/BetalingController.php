<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PakkettenDAO.php';

class BetalingController extends Controller {

  private $betalingDAO;

  function __construct() {
    $this->betalingDAO = new betalingDAO();
  }

  public function winkelmand() {
    if(!empty($_POST)) {
      $this->handleWinkelmand();
    }
  }

  private function handleWinkelmand() {
    $errors = array();
    if (isset($_POST['betalen'])) {
      header('Location: index.php?page=betaling');
      exit();
    }
  }

  public function betaling() {
    if(!empty($_POST)) {
      $this->handleBetaling();
    }
  }

  private function handleBetaling() {
    $errors = array();

    $data = array(
      'email' => $_POST['email'],
      'naam' => $_POST['naam'],
      'voornaam' => $_POST['voornaam'],
      'straat_nr' => $_POST['straat_nr'],
      'plaats' => $_POST['plaats'],
      'postcode' => $_POST['postcode'],
      'land' => $_POST['land'],
      'telefoon' => $_POST['telefoon'],
      'kaartnummer' => $_POST['kaartnummer'],
      'vervaldatum' => $_POST['vervaldatum'],
      'veiligheidscode' => $_POST['veiligheidscode']
    );
    $errors = $this->betalingDAO->validate($data);
    if (isset($_POST['email'])) {
      if (empty($errors)) {
        $insertedbetaling = $this->betalingDAO->insert($data);
        if(!empty($insertedbetaling)) {
          $_SESSION['info'] = 'Succesvolle betaling!';
          header('Location: index.php');
          exit();
        }
      }
    }

    $this->set('errors', $errors);
  }
  }
