<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3 class="text-center">CHI TIẾT ĐƠN HÀNG</h3>
        <table class="table table-bordered align-middle border-dark">
            <tr class="table-secondary text-center">
                <th width="5%">STT</th>
                <th width="35%">Tên sản phẩm</th>
                <th width="5%">Số lương</th>
                <th width="12%">Đơn giá</th>
                <th width="12%">Thành tiền</th>
                <th width="20%">Xoá</th>
            </tr>
            <?php
                if(isset($_SESSION['card']) && $_SESSION['card']!=null){
                    $tong_sl = 0; $tong_tien = 0; $i=0;
                    foreach($_SESSION['card'] as $id =>$value){
                        $tong_sl = $tong_sl+$value['sl'];
                        $tong_tien = $tong_tien + $value['giasp'] * $value['sl'];
                        $i=$i+1;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['tensp']; ?></td>
                            <td class="text-center"><?php echo $value['sl']; ?></td>
                            <td align='right'><?php echo number_format($value['giasp']); ?></td>
                            <td align='right'><?php echo number_format($value['giasp'] * $value['sl']); ?></td>
                            <td class="text-center"><a href=""><button class="btn btn-danger">Xoá</button></a></td>
                        </tr>
                        <?php

                    }                
            ?>
            <tr>
                <th></th>
                <th class="text-center">Tổng công</th>
                <th class="text-right"><?php echo $tong_sl; ?></th>
                <th></th>
                <th align='right'><?php echo number_format($tong_tien); ?></th>
                <th></th>
            </tr>
                <?php } ?>
            <tr>
                <td colspan="6" class="text-center">
                    <a href="index.php"><button class="btn btn-warning">Mua hàng tiếp</button></a>
                    <a href=""><button class="btn btn-primary">Thanh toán</button></a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>