<?php
function renderLogin() { ?>
<?php renderHeader(); ?>
<div class="login">
    <h2>Đăng nhập</h2>
    <form method="POST" action="?controller=home&action=login">
        <label>Tên đăng nhập:</label><input type="text" name="username" required><br>
        <label>Mật khẩu:</label><input type="password" name="password" required><br>
        <button type="submit">Đăng nhập</button>
    </form>
</div>
<?php renderFooter(); ?>
<?php }