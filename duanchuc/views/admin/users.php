

<?php renderHeader(); ?>
<div class="admin">
    <h2>Quản lý người dùng</h2>
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Tên đăng nhập</th>
            <th>Vai trò</th>
            <th>Ngày tạo</th>
        </tr>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['user_id']); ?></td> <!-- Sử dụng user_id thay vì id -->
                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['role']); ?></td>
                    <td><?php echo $user['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">Không có người dùng nào.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>
<?php renderFooter(); ?>