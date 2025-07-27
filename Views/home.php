<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .pagination {
            margin-top: 20px;
            text-align: center;
            margin-bottom: 10px;
        }
        .pagination a {
            padding: 8px 12px;
            margin: 0 5px;
            text-decoration: none;
            border: 1px solid #000;
        }
        .pagination a.active {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <a href="index.php?route=add"><button>Thêm</button></a>
 <table>
    <tr>
        <th>id</th>
        <th>Tên Áo</th>
        <th>Giá</th>
        <th>Ảnh sản phẩm</th>
        <th>Thương Hiệu</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php 
    foreach($dataAll as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['tenao']?></td>
            <td><?php echo $row['Gia']?></td>
            <td><img src="images/<?php echo $row['anhsanpham_image']?>" alt=""height="100"></td>
            <td><?php echo $row['thuonghieu']?></td>
            <td><a href="index.php?route=edit&id=<?php echo $row['id']?>">Sửa</a></td>
            <td><a href="index.php?route=delete&id=<?php echo $row['id']?>">Xóa</a></td>
        </tr>
   <?php }?>
  
 </table>

</body>