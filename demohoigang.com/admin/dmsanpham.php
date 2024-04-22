<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH MỤC SẢN PHẨM</title>
</head>
<body>
    <p class="text-center"><strong> DANH MỤC SẢN PHẨM</strong></p>
    <p align="right"><a href="index.php?admin=addsanpham" class="text-right"><button class="btn btn-primary">Thêm mới</button></a></p>
    <div>
        <table class="table table-bordered align-middle table-striped">
            <tr class="text-center table-secondary">
                <th width="5%">STT</th>
                <th width="5%">Mã SP</th>
                <th width="25%">Tên sản phẩm</th>
                <th width="30%">Chi tiết sản phẩm</th>
                <th width="10%">Hình đại diện</th>
                <th width="10%">Đơn giá</th>
                <th width="10%">Sửa - Xoá</th>
            </tr>
            <?php
                $sql = "SELECT * FROM sanpham order by id DESC ";
                $hang = mysqli_query($con, $sql);
                if(mysqli_num_rows($hang)>0){
                    $i = 1;
                    while($row = mysqli_fetch_array($hang)){
                        ?>
                        <tr>
                            <td><?php echo $i ; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['TenSP']; ?></td>
                            <td><?php echo $row['Chitiet']; ?></td>
                            <td><img src="../<?php echo $row['Hinhanh']; ?>" width="150px" height="150px"></td>
                            <td><?php echo number_format($row['GiaSP']); ?></td>
                            <td>
                                <a href="#"><button class="btn btn-primary">Sửa</button></a>
                                <a href="#"><button class="btn btn-danger">Xoá</button></a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    }
                }
            ?>            
        </table>
    </div>
</body>
</html>