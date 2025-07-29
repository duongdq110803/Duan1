<?php renderHeader(); ?>
<div class="admin">
    <h2>Quản lý đơn hàng</h2>
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>Người đặt</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
        </tr>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['user_id']; ?></td>
                <td><?php echo $order['created_at']; ?></td>
                <td><?php echo number_format($order['total'], 0, ',', '.'); ?> VNĐ</td>
                <td><?php echo $order['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php renderFooter(); ?>