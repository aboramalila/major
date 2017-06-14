<?php

require_once __DIR__ . '/BetalingDAO.php';

class pakkettenDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT * FROM `cru_ag_tussenstops`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "SELECT * FROM `cru_ag_tussenstops` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {

  }

  public function update($id, $data) {

  }

  public function delete($id) {

  }

  public function validate($data) {

  }
}
