<?php
class Cart {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getCartItems($user_id) {
        $query = "SELECT c.*, p.name, p.price, p.image FROM cart c JOIN products p ON c.product_id = p.id WHERE c.user_id = :user_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addToCart($user_id, $product_id, $quantity) {
        $query = "INSERT INTO cart (user_id, product_id, quantity, created_at, updated_at) VALUES (:user_id, :product_id, :quantity, NOW(), NOW()) ON DUPLICATE KEY UPDATE quantity = quantity + :quantity, updated_at = NOW()";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":product_id", $product_id);
        $stmt->bindParam(":quantity", $quantity);
        return $stmt->execute();
    }

    public function removeFromCart($user_id, $product_id) {
        $query = "DELETE FROM cart WHERE user_id = :user_id AND product_id = :product_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":product_id", $product_id);
        return $stmt->execute();
    }
}
?>