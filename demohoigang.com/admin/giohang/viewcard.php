<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2 class="text-center">CHI TIẾT ĐƠN HÀNG</h2>
        <table class="table table-bordered align-middle border-dark">
            <tr class="table-secondary text-center">
                <th width="25%">Tên sản phẩm</th>
                <th width="5%">Số lương</th>
                <th width="10%">Đơn giá</th>
                <th width="15%">Thành tiền</th>
                <th width="10%">Xóa</th>
            </tr>
            <?php
                if(isset($_SESSION['card']) && $_SESSION['card']!=null){
                    $tong_sl = 0; $tong_tien = 0;
                    foreach($_SESSION['card'] as $id =>$value){
                        $tong_sl = $tong_sl + $value['sl'];
                        $tong_tien = $tong_tien + $value['sl']*$value['giasp'];
                        ?>
                        <tr>
                            <td><?php echo $value['tensp']; ?></td>
                            <td><?php echo $value['sl']; ?></td>
                            <td><?php echo number_format($value['giasp']); ?></td>
                            <td><?php echo number_format($value['sl'] * $value['giasp']); ?></td>
                            <td><a href="index.php?content=delete&id=<?php echo $id; ?>"><button class="btn btn-danger">Xóa</button></a></td>
                        </tr>
                        <?php
                    }
                // }
            ?>
            <tr>
            </tr>
            <tr>
                <th class="text-center">Tổng công</th>
                <th align="right"><?php echo $tong_sl; ?></th>
                <th ></th>
                <th align="right"><?php echo number_format($tong_tien); ?></th>
                <th ></th>
            </tr>
            <?php
                }
                ?>
            <tr>
                <td colspan="5" class="text-center">
                    <a href="index.php"><button class="btn btn-warning">Mua tiếp</button></a>
                    <a href="#"><button class="btn btn-primary">Thanh toán</button></a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>