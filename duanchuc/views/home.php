<!-- Trang chủ -->
<?php require_once __DIR__ . 'layouts/header.php'; ?>
<div class="product-grid">
    <?php foreach ($products as $product): ?>
        <div class="product-item">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h3><?php echo $product['name']; ?></h3>
            <p><?php echo number_format($product['price'], 0, ',', '.') ?> VNĐ</p>
            <a href="?controller=product&action=detail&id=<?php echo $product['id']; ?>">Xem chi tiết</a>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'layouts/footer.php'; ?>