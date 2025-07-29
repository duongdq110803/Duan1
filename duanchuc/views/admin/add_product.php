
<?php renderHeader(); ?>
<div class="admin">
    <h2>Thêm sản phẩm mới</h2>
    <form method="POST" action="?controller=admin&action=addProduct">
        <label>Tên sản phẩm:</label><input type="text" name="name" required><br>
        <label>Mô tả:</label><textarea name="description"></textarea><br>
        <label>Giá:</label><input type="number" step="0.01" name="price" required><br>
        <label>Số lượng tồn:</label><input type="number" name="stock_quantity" required><br>
        <label>Danh mục ID:</label><input type="number" name="category_id" required><br>
        <label>Đường dẫn hình ảnh:</label><input type="text" name="image" required><br>
        <button type="submit">Thêm</button>
    </form>
</div>
<?php renderFooter(); ?>

