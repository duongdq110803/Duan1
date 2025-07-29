<?php renderHeader(); ?>
<?php 
session_start();
$_SESSION['user_id'] = 1; 
$_SESSION['role'] = 'admin';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
    <h2 class="mb-4">Quản lý sản phẩm</h2>
    <a href="?controller=admin&action=addProduct" class="btn btn-success mb-3">Thêm sản phẩm</a>
    <!-- <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Danh mục</th>
                <th>Ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product['product_id']); ?></td>
                        <td><?php echo htmlspecialchars($product['name']); ?></td>
                        <td><?php echo number_format($product['price'], 0, ',', '.'); ?> VNĐ</td>
                        <td><?php echo $product['stock_quantity']; ?></td>
                        <td><?php echo $product['category_id']; ?></td> <!-- Cần điều chỉnh nếu có tên danh mục -->
                        <td><img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" width="100"></td>
                        <td>
                            <a href="?controller=admin&action=editProduct&id=<?php echo $product['product_id']; ?>" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="?controller=admin&action=deleteProduct&id=<?php echo $product['product_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">Không có sản phẩm nào.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php renderFooter(); ?> -->

<?php renderHeader(); ?>
<div class="admin">
    <h2>Danh sách sản phẩm</h2>
    <?php if (!empty($products)): ?>
        <table class="table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng tồn</th>
                    <th>Danh mục</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product['product_id']); ?></td>
                        <td><?php echo htmlspecialchars($product['name']); ?></td>
                        <td><?php echo htmlspecialchars($product['price']); ?></td>
                        <td><?php echo htmlspecialchars($product['stock_quantity']); ?></td>
                        <td><?php echo htmlspecialchars($product['category_id']); ?></td>
                        <td><?php echo htmlspecialchars($product['image']); ?></td>
                        <td>
                            <a href="?controller=admin&action=editProduct&id=<?php echo htmlspecialchars($product['product_id']); ?>" class="btn btn-success mb-3">Thêm sửa</a>
                            <a href="?controller=admin&action=deleteProduct&id=<?php echo htmlspecialchars($product['product_id']); ?>" class="btn btn-danger mb-3" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Không có sản phẩm nào.</p>
    <?php endif; ?>
</div>
<?php renderFooter(); ?>