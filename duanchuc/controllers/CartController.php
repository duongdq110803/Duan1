<?php
class CartController {
    public function index() {
        session_start();
        $user_id = $_SESSION['user_id'] ?? 1; // Giả định user_id = 1 để test
        $cart = new Cart();
        $cartItems = $cart->getCartItems($user_id);
        $total = array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cartItems));
        require_once '../views/cart.php';
    }

    public function add($id) {
        session_start();
        $user_id = $_SESSION['user_id'] ?? 1; // Giả định user_id = 1 để test
        $cart = new Cart();
        $cart->addToCart($user_id, $id, 1); // Thêm 1 sản phẩm
        header("Location: ?controller=cart&action=index");
        exit();
    }

    public function remove($id) {
        session_start();
        $user_id = $_SESSION['user_id'] ?? 1; // Giả định user_id = 1 để test
        $cart = new Cart();
        $cart->removeFromCart($user_id, $id);
        header("Location: ?controller=cart&action=index");
        exit();
    }
}
?>