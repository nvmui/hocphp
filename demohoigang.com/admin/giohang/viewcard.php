<meta charset="utf-8" />
<h2 class="text-center">CHI TIẾT GIỎ HÀNG</h2>  
<div> 
    <table class="table table-bordered align-middle border-dark" border="1px">  
        <tr class="table-secondary text-center">  
            <th width="25%">Tên sản phẩm</th>  
            <th width="5%">Số lượng</th>  
            <th width="12%">Giá</th>  
            <th width="12%">Tổng tiền</th>  
            <th width="18%">Action</th>
        </tr>  
        <?php
        // include './conet/ketnoicsdl.php';
        $total = 0; $tongsp = 0;
        if(isset($_SESSION["card"]) && $_SESSION["card"] != null){   
            foreach($_SESSION['card'] as $id => $value) { 
        ?>  
        <tr>
            <td style="padding-left: 10px">
                <a href="index.php?action=chitiet&idsp=<?php echo $id ?>" class="a_tenview">
                <?php echo $_SESSION['card'][$id]['tensp'] //$row["tensp"];?></a>
            </td>  
            <td style="text-align:center">
                <input type="number" name="slupdate" 
                value="<?php echo $_SESSION['card'][$id]['sl'] ?>"
                style="width: 40px; border-style: none;text-align: center;" >        
            </td>  
            <td style="text-align:right; padding-right:5px;">
                <?php echo number_format($_SESSION['card'][$id]['giasp'],0)// number_format($_SESSION['giohang'][$id]['giaban'],0); ?>
            </td>  
            <td style="text-align:right; padding-right:5px;">
                <?php echo number_format((float)($_SESSION['card'][$id]['sl']) * (float)($_SESSION['card'][$id]['giasp']),0);?>
            </td>
            <td style="text-align:center">
                <a href="index.php?content=delete&idsp=<?php echo $id; ?>"><button class="btn btn-danger">Xoá</button></a>
                <!-- <a href="index.php?content=update&idsp=<?php //echo $id; ?>"><button style="width:100px;">Cập nhật</button></a>                 -->
            </td>
        </tr>  
        <?php  					
            $total = $total + ((float)($_SESSION['card'][$id]['sl']) * (float)($_SESSION['card'][$id]['giasp']));
            $tongsp = $tongsp + $_SESSION['card'][$id]['sl'];
            }
        ?>  
        <tr>  
            <td align="center" style="font-weight:bold; padding-right:5px;">Tổng cộng</td>
            <td align="right" style="font-weight:bold; padding-right:5px"><?php echo number_format($tongsp); ?></td> 
            <td></td>
            <td align="right" style="font-weight:bold; padding-right:5px"><?php echo number_format($total); ?></td>  
            <td></td>  
        </tr>        
        <?php
        }
    ?>
        <tr>
            <td colspan="5" style="text-align:center">
                <a href="index.php"><button class="btn btn-warning">Mua hàng tiếp</button></a>
                <a href="#"><button class="btn btn-primary">Thanh toán</button></a>
            </td>
        </tr>
    </table>
</div> 