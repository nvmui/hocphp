<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập sản phâm</title>
</head>
<body>
    <h4 class="text-center">NHẬP SẢN PHẨM MỚI</h4>
    <form method="post" action="#" enctype="multipart/form-data">
    <div class="form-group">
        <label for="sp_ten">Tên sản phẩm</label>
        <input type="text" class="form-control" id="sp_ten" name="sp_ten" placeholder="Nhập tên sản phẩm">
    </div>
    <div class="form-group">
        <label for="sp_ten">Mô tả sản phẩm</label>
        <input type="text" multiple="3" class="form-control" id="sp_ten" name="sp_ten" placeholder="Nhập tên sản phẩm">
    </div>    
    <div class="form-group">
        <div class="file-loading">
        <label>Hình đại diện</label>
        <input id="sp_hinh" type="file" name="sp_hinh">
        </div>
    </div>
    <div class="form-group">
        <label for="ma_loai">Chọn loại sản phẩm</label>
        <select name="ma_loai" class="form-control">
            <?php
                $sql = "SELECT * FROM danhmucsp";
                $dm = mysqli_query($con, $sql);
                if(mysqli_num_rows($dm)>0){
                    while($row = mysqli_fetch_array($dm)){
                        echo "<option value='.$row[iddm].'>$row[TenDM]</option>";
                    }
                }
            ?>        
        </select>
    </div>
    <div class="form-group">
        <label for="ma_hang">Nhà sản xuất</label>
        <select name="ma_hang" class="form-control">
            <?php
                $sql = "SELECT * FROM hangsx";
                $hang = mysqli_query($con, $sql);
                if(mysqli_num_rows($hang)>0){
                    while($row = mysqli_fetch_array($hang)){
                        echo "<option value='.$row[idhang].'>$row[TenHang]</option>";
                    }
                }
            ?>    
        </select>
    </div>
    <div class="form-group">
        <label for="giasp">Đơn giá</label>
        <input type="number" class="form-control" name="giasp">
    </div>
    <div class="form-group">
        <label for="soluong">Sô lượng</label>
        <input type="number" class="form-control" name="soluong">
    </div>
    <div class="form-group">
        <label for="ngaynhap">Ngày nhập</label>
        <input type="datetime-local" class="form-control" name="gaynhap">
    </div>
    <div class="form-group">
        <label for="ghichu">Ghi chú</label>
        <input type="text" multiple="3"  class="form-control" name="ghichu">
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
</body>
</html>