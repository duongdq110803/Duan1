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
  <h1>Thêm dữ liệu</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>tenao</td>
            <td><input type="text" name="tenao" require /></td>
        </tr>
        <tr>
            <td>Gia</td>
            <td><input type="text" name="Gia" require/></td>
        </tr>
        <tr>
            <td>anhsanpham_image</td>
            <td><input type="file" name="anhsanpham_image" /></td>
        </tr>
        <tr>
            <td>thuonghieu</td>
            <td><input type="text" name="thuonghieu" require/></td>
        </tr>
    </table>
    <button type="submit" name="add">Lưu</button>
  </form>
</body>