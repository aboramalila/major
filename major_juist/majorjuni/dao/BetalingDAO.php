<?php

require_once __DIR__ . '/DAO.php';

class betalingDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT * FROM `cru_ag`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "SELECT * FROM `cru_betalingen` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    $errors = $this->validate($data);
    if(empty($errors)) {
      $sql = "INSERT INTO `cru_betalingen` (`email`, `naam`, `voornaam`, `straat_nr`, `plaats`, `postcode`, `land`, `telefoon`, `kaartnummer`, `vervaldatum`, `veiligheidscode`) VALUES (:email, :naam, :voornaam, :straat_nr, :plaats, :postcode, :land, :telefoon, :kaartnummer, :vervaldatum, :veiligheidscode)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':naam', $data['naam']);
      $stmt->bindValue(':voornaam', $data['voornaam']);
      $stmt->bindValue(':straat_nr', $data['straat_nr']);
      $stmt->bindValue(':plaats', $data['plaats']);
      $stmt->bindValue(':postcode', $data['postcode']);
      $stmt->bindValue(':land', $data['land']);
      $stmt->bindValue(':telefoon', $data['telefoon']);
      $stmt->bindValue(':kaartnummer', $data['kaartnummer']);
      $stmt->bindValue(':vervaldatum', $data['vervaldatum']);
      $stmt->bindValue(':veiligheidscode', $data['veiligheidscode']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function update($id, $data) {
    $errors = $this->validate($data);
    if(empty($errors)) {
      $sql = "UPDATE `cru_betalingen` SET `email` = :email, `naam` = :naam, `voornaam` = :voornaam, `straat_nr` = :straat_nr, `plaats` = :plaats, `postcode` = :postcode,  `land` = :land, `telefoon` = :telefoon, `kaartnummer` = :kaartnummer, `vervaldatum` = :vervaldatum, `veiligheidscode` = :veiligheidscode  WHERE `id` = :id";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':naam', $data['naam']);
      $stmt->bindValue(':voornaam', $data['voornaam']);
      $stmt->bindValue(':straat_nr', $data['straat_nr']);
      $stmt->bindValue(':plaats', $data['plaats']);
      $stmt->bindValue(':postcode', $data['postcode']);
      $stmt->bindValue(':land', $data['land']);
      $stmt->bindValue(':telefoon', $data['telefoon']);
      $stmt->bindValue(':kaartnummer', $data['kaartnummer']);
      $stmt->bindValue(':vervaldatum', $data['vervaldatum']);
      $stmt->bindValue(':veiligheidscode', $data['veiligheidscode']);
      $stmt->bindValue(':id', $id);
      if($stmt->execute()) {
        return $this->selectById($id);
      }
    }
    return false;
  }

  public function delete($id) {
    $sql = "DELETE FROM `cru_betalingen` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function validate($data) {
    $errors = array();
    if(empty($_POST['email'])) {
      $errors['email'] = 'Gelieve je email op te geven';
    }
    if(empty($_POST['naam'])) {
      $errors['naam'] = 'Gelieve je naam op te geven';
    }
    if(empty($_POST['voornaam'])) {
      $errors['voornaam'] = 'Gelieve je voornaam op te geven';
    }
    if(empty($_POST['straat_nr'])) {
      $errors['straat_nr'] = 'Gelieve je straat en nummer op te geven';
    }
    if(empty($_POST['plaats'])) {
      $errors['plaats'] = 'Gelieve je plaats op te geven';
    }
    if(empty($_POST['postcode'])) {
      $errors['postcode'] = 'Gelieve je postcode op te geven';
    }
    if(empty($_POST['land'])) {
      $errors['land'] = 'Gelieve je land op te geven';
    }
    if(empty($_POST['kaartnummer'])) {
      $errors['kaartnummer'] = 'Gelieve je kaartnummer op te geven';
    }
    if(empty($_POST['vervaldatum'])) {
      $errors['vervaldatum'] = 'Gelieve je vervaldatum op te geven';
    } else {
      $year = intval(date('y'));
      $month = intval(date('mm'));
      if (substr($_POST['vervaldatum'], 2,1) <> '/') {
        $errors['vervaldatum'] = 'Formaat niet correct';
      } else {
        if(intval(substr($_POST['vervaldatum'], 0,2)) < 1 OR intval(substr($_POST['vervaldatum'], 0,2)) > 12 OR intval(substr($_POST['vervaldatum'], 3,2)) < $year){
          $errors['vervaldatum'] = 'Datum is niet niet correct';
        } else {
          if (intval(substr($_POST['vervaldatum'], 3,2)) == $year AND intval(substr($_POST['vervaldatum'], 0,2)) < $month) {
            $errors['vervaldatum'] = 'Datum is niet correct';
          }
        }
      }
    }
    if(empty($_POST['veiligheidscode'])) {
      $errors['veiligheidscode'] = 'Gelieve je veiligheidscode op te geven';
    } else {
      if (strlen($_POST['veiligheidscode']) < 3 OR strlen($_POST['veiligheidscode']) > 4) {
        $errors['veiligheidscode'] = 'Ongeldige veiligheidscode';
      }
    }
    return $errors;
  }
}
