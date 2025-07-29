<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Fumiro - Shop Quần Áo</title>
    <link rel="stylesheet" href="../style.css">
    
    <style>
        .product-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .product-item { border: 1px solid #ddd; padding: 10px; text-align: center; }
        .product-item img { max-width: 100%; }
        .product-detail { max-width: 800px; margin: 0 auto; padding: 20px; }
        .cart-item { border: 1px solid #ddd; padding: 10px; margin: 10px 0; }
        .admin-table { width: 100%; border-collapse: collapse; }
        .admin-table th, .admin-table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    </style>
    
</head>
<a href="?controller=admin&action=orders">Quản lý đơn hàng</a>
<body>
<!-- Thêm link mới vào menu admin -->
 
<a href="?controller=admin&action=users">Quản lý người dùng</a>
    <header>
        <nav>
            <a href="?controller=home&action=index">Home</a>
            <a href="?controller=product&action=detail&id=1">Product</a>
            <a href="?controller=cart&action=index">Cart</a>
            <a href="?controller=admin&action=index">Admin</a>
        </nav>
    </header>
    <main>



   