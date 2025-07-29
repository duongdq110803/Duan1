<?php
require_once __DIR__ . '/../config/Database.php';

class Product {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
        if (!$this->conn) {
        die("Kết nối cơ sở dữ liệu thất bại!");
    }
    }

    public function getAllProducts() {
        $query = "SELECT product_id, name, description, price, stock_quantity, category_id, image, created_at FROM products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $query = "SELECT product_id, name, description, price, stock_quantity, category_id, image, created_at FROM products WHERE product_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProduct($id, $name, $description, $price, $stock_quantity, $category_id, $image) {
        $query = "UPDATE products SET name = :name, description = :description, price = :price, stock_quantity = :stock_quantity, category_id = :category_id, image = :image WHERE product_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":stock_quantity", $stock_quantity, PDO::PARAM_INT);
        $stmt->bindParam(":category_id", $category_id, PDO::PARAM_INT);
        $stmt->bindParam(":image", $image);
        return $stmt->execute();
    }

    public function deleteProduct($id) {
        $query = "DELETE FROM products WHERE product_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}