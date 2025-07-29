<!-- Chi tiết sản phẩm -->
<?php renderHeader(); ?>
<div class="product-detail">
    <img src="<?php echo $productData['image']; ?>" alt="<?php echo $productData['name']; ?>">
    <h1><?php echo $productData['name']; ?></h1>
    <p>Giá: <?php echo number_format($productData['price'], 0, ',', '.') ?> VNĐ</p>
    <p><?php echo $productData['description']; ?></p>
    <a href="?controller=cart&action=add&id=<?php echo $productData['id']; ?>">Thêm vào giỏ</a>
</div>
<?php renderFooter(); ?>
