<?php
require_once './models/Product.php';
class HomeController {
    public function index() {
        $product = new Product();
        $products = $product->getAllProducts();
        require_once 'views/home.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $userData = $user->login($_POST['username'], $_POST['password']);
            if ($userData) {
                session_start();
                $_SESSION['user_id'] = $userData['id'];
                $_SESSION['role'] = $userData['role'];
                header("Location: ?controller=admin&action=index");
                exit();
            } else {
                echo "Đăng nhập thất bại!";
            }
        }
        require_once '../views/login.php';
    }
}
?>