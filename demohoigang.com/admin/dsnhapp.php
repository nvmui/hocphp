<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH MỤC NHÀ PHÂN PHỐI</title>
</head>
<body>
    <p class="text-center"><strong> DANH MỤC NHÀ PHÂN PHỐI</strong></p>
    <p align="right"><a href="index.php?admin=nhacc" class="text-right"><button class="btn btn-primary">Thêm mới</button></a></p>
    <div>
        <table class="table table-bordered align-middle table-striped">
            <tr class="text-center table-secondary">
                <th width="5%">STT</th>
                <th width="5%">Mã nhà Phân Phối</th>
                <th width="25%">Tên nhà phân phối</th>
                <th width="30%">Địa chỉ</th>
                <th width="10%">Số điện thoại</th>
                <th width="15%">Email</th>
                <th width="10%">Sửa - Xoá</th>
            </tr>
            <?php
                // include('../ketnoi/ketnoicsdl.php');
                $sql = "SELECT * FROM nhacungcap order by IDNhaCungCap DESC";
                $hang = mysqli_query($con, $sql);
                if(mysqli_num_rows($hang)>0){
                    $i = 1;
                    while($row = mysqli_fetch_array($hang)){
                        ?>
                        <tr>
                            <td><?php echo $i ; ?></td>
                            <td><?php echo $row['IDNhaCungCap']; ?></td>
                            <td><?php echo $row['TenNhaCC']; ?></td>
                            <td><?php echo $row['DiaChi']; ?></td>
                            <td><?php echo $row['SDT']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td>
                                <a href="#"><button class="btn btn-primary">Sửa</button></a>
                                <a href="index.php?admin=deletenpp&id=<?php echo $row['IDNhaCungCap']; ?>"><button class="btn btn-danger">Xoá</button></a>
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