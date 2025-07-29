<?php
class ProductController {
    public function detail($id) {
        $product = new Product();
        $productData = $product->getProductById($id);
        require_once 'views/product.php';
    }
}
?>