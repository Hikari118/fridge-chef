<?php
// models/Ingredient.php
require_once 'Database.php';

class Ingredient {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM ingredients ORDER BY expiration_date ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
      $query = "INSERT INTO ingredients (name, category, quantity, expiration_date) VALUES (:name, :category, :quantity, :expiration_date)";
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(':name', $data['name']);
      $stmt->bindParam(':category', $data['category']);
      $stmt->bindParam(':quantity', $data['quantity']);
      $stmt->bindParam(':expiration_date', $data['expiration_date']);
      return $stmt->execute();
  }

    public function delete($id) {
      $query = "DELETE FROM ingredients WHERE id = :id";
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(':id', $id);
      return $stmt->execute();
  }

      // 特定の食材を取得
  public function getById($id) {
    $query = "SELECT * FROM ingredients WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // 食材の更新処理
  public function update($data) {
    $query = "UPDATE ingredients SET name = :name, category = :category, quantity = :quantity, expiration_date = :expiration_date WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':category', $data['category']);
    $stmt->bindParam(':quantity', $data['quantity']);
    $stmt->bindParam(':expiration_date', $data['expiration_date']);
    $stmt->bindParam(':id', $data['id']);
    return $stmt->execute();
  }

  public function getIngredientNames() {
    $query = "SELECT name FROM ingredients";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return array_column($stmt->fetchAll(PDO::FETCH_ASSOC), 'name');
  }



  
}
