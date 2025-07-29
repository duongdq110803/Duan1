<?php renderHeader(); ?>
<div class="cart">
    <h2>Giỏ hàng</h2>
    <?php if (empty($cartItems)): ?>
        <p>Giỏ hàng trống.</p>
    <?php else: ?>
        <?php foreach ($cartItems as $item): ?>
            <div class="cart-item">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" style="width: 50px;">
                <span><?php echo $item['name']; ?> (x<?php echo $item['quantity']; ?>)</span>
                <span><?php echo number_format($item['price'] * $item['quantity'], 0, ',', '.') ?> VNĐ</span>
                <a href="?controller=cart&action=remove&id=<?php echo $item['product_id']; ?>">Xóa</a>
            </div>
        <?php endforeach; ?>
        <h3>Tổng cộng: <?php echo number_format($total, 0, ',', '.') ?> VNĐ</h3>
    <?php endif; ?>
</div>
<?php renderFooter(); ?>
