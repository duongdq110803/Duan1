<?php renderHeader(); ?>
<div class="admin">
    <h2>Sửa sản phẩm</h2>
    <form method="POST" action="?controller=admin&action=editProduct&id=<?php echo $productData['id']; ?>">
        <label>Tên sản phẩm:</label><input type="text" name="name" value="<?php echo htmlspecialchars($productData['name']); ?>" required><br>
        <label>Mô tả:</label><textarea name="description"><?php echo htmlspecialchars($productData['description']); ?></textarea><br>
        <label>Giá:</label><input type="number" step="0.01" name="price" value="<?php echo $productData['price']; ?>" required><br>
        <label>Số lượng tồn:</label><input type="number" name="stock_quantity" value="<?php echo $productData['stock_quantity']; ?>" required><br>
        <label>Danh mục ID:</label><input type="number" name="category_id" value="<?php echo $productData['category_id']; ?>" required><br>
        <label>Đường dẫn hình ảnh:</label><input type="text" name="image" value="<?php echo htmlspecialchars($productData['image']); ?>" required><br>
        <button type="submit">Lưu</button>
    </form>
</div>
<?php renderFooter(); ?>
