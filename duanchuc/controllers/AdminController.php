<?php
require_once __DIR__ . '/../models/Product.php'; // Include Product model
require_once __DIR__ . '/../models/User.php';    // Include User model
class AdminController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            die("Bạn không có quyền truy cập trang admin!");
        }
        require_once __DIR__ . '/../models/Product.php';
        $product = new Product();
        $products = $product->getAllProducts();
        require_once __DIR__ . '/../views/admin/index.php';
    }

    public function orders() {
        session_start();
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            die("Bạn không có quyền truy cập trang admin!");
        }
        $orders = []; // Cần tạo model Order
        require_once __DIR__ . '/../views/admin/orders.php';
    }

    public function users() {
        session_start();
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            die("Bạn không có quyền truy cập trang admin!");
        }
        require_once __DIR__ . '/../models/User.php';
        $user = new User();
        $users = $user->getAllUsers();
        require_once __DIR__ . '/../views/admin/users.php';
        renderUsers($users);
    }
 

    public function addProduct() {
        session_start();
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            die("Bạn không có quyền truy cập trang admin!");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $stock_quantity = $_POST['stock_quantity'];
            $category_id = $_POST['category_id'];
            $image = $_POST['image'];
            $product = new Product();
            $query = "INSERT INTO products (name, description, price, stock_quantity, category_id, image, created_at) VALUES (:name, :description, :price, :stock_quantity, :category_id, :image, NOW())";
            $stmt = $product->conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":price", $price);
            $stmt->bindParam(":stock_quantity", $stock_quantity, PDO::PARAM_INT);
            $stmt->bindParam(":category_id", $category_id, PDO::PARAM_INT);
            $stmt->bindParam(":image", $image);
            $stmt->execute();
            header("Location: ?controller=admin&action=index");
            exit();
        }
        require_once __DIR__ . '/../views/admin/add_product.php';
    }

    public function editProduct($id) {
        session_start();
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            die("Bạn không có quyền truy cập trang admin!");
        }
        $product = new Product();
        $productData = $product->getProductById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $stock_quantity = $_POST['stock_quantity'];
            $category_id = $_POST['category_id'];
            $image = $_POST['image'];
            $product->updateProduct($id, $name, $description, $price, $stock_quantity, $category_id, $image);
            header("Location: ?controller=admin&action=index");
            exit();
        }
        require_once __DIR__ . '/../views/admin/edit_product.php';
    }

    public function deleteProduct($id) {
        session_start();
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            die("Bạn không có quyền truy cập trang admin!");
        }
        $product = new Product();
        $product->deleteProduct($id);
        header("Location: ?controller=admin&action=index");
        exit();
    }
}
?>