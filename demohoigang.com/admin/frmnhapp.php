<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập nhà phân phối</title>
</head>
<body>
    <h4 class="text-center">NHẬP SẢN NHÀ PHÂN PHỐI</h4>
    <form method="post" action="index.php?admin=insertnpp" enctype="multipart/form-data">
        <div class="form-group">
            <label for="sp_ten">Tên nhà phân phối</label>
            <input type="text" class="form-control" id="sp_ten" name="tennpp" placeholder="Nhập tên nhà phân phối">
        </div>
        <div class="form-group">
            <label for="sp_ten">Địa chỉ</label>
            <input type="text" multiple="3" class="form-control" id="sp_ten" name="diachi" placeholder="Nhập địa chỉ">
        </div>    
        <div class="form-group">
            <label for="soluong">Số điện thoại</label>
            <input type="text" class="form-control" name="sodthoai" placeholder="Nhập số điện thoại liên hệ">
        </div>
        <div class="form-group">
            <label for="ngaynhap">Email nhà phân phối</label>
            <input type="text" class="form-control" name="email" placeholder="Nhập địa chỉ email">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</body>
</html>