<?php

require_once __DIR__ . '/DAO.php';

class vragenDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT * FROM `cru_vragen`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "SELECT * FROM `cru_vragen` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    $errors = $this->validate($data);
    if(empty($errors)) {
      $sql = "INSERT INTO `cru_vragen` (`naam`, `email`, `vraag`) VALUES (:naam, :email, :vraag)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':naam', $data['naam']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':vraag', $data['vraag']);
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
      $sql = "UPDATE `cru_vragen` SET `naam` = :naam, `email` = :email, `vraag` = :vraag  WHERE `id` = :id";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':naam', $data['naam']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':vraag', $data['vraag']);
      $stmt->bindValue(':id', $id);
      if($stmt->execute()) {
        return $this->selectById($id);
      }
    }
    return false;
  }

  public function delete($id) {
    $sql = "DELETE FROM `cru_vragen` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function validate($data) {
    $errors = array();
    if(empty($_POST['naam'])) {
      $errors['naam'] = 'Gelieve uw naam op te geven';
    }
    if(empty($_POST['email'])) {
      $errors['email'] = 'Gelieve uw email op te geven';
    }
    if(empty($_POST['vraag'])) {
      $errors['vraag'] = 'Gelieve uw vraag op te geven';
    }
    return $errors;
  }
}
