<?php
    include('./ketnoi/ketnoicsdl.php');
    $sql = "SELECT * FROM sanpham  ORDER BY id DESC limit 1";
	$kq = mysqli_query($con, $sql);
    if(mysqli_num_rows($kq)>0){
        while($row = mysqli_fetch_array($kq)){
        ?>
        <div class="col-md-4 mt-1">
            <div class="card">
                <div class="card-body">
                    <img src="./<?php echo $row['Hinhanh']; ?>" width="100%" alt="">
                    <p class="tensp"><span ><?php echo $row['TenSP']; ?></span></p>
                    <p class="giasp"><span><?php echo number_format($row['GiaSP'])." vnđ"; ?></span></p>
                    <form method="post" action="./index.php?content=add&id=<?php echo $row['id']; ?>">
                        <input type="hidden" name="tensp" value="<?php echo $row['TenSP']; ?>">
                        <input type="hidden" name="giasp" value="<?php echo $row['GiaSP']; ?>">
                        <input type="number" value="1" name="sl" style="width: 30px;">
                        <button class="btn btn-primary">MUA NGAY</button>
                        <a href="./index.php?content=xem&id=<?php echo $row['id']; ?>"
                         class="btn btn-info">CHI TIẾT</a>                                  
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
    }else{
        echo "Hiện tại dữ liệu đang được cập nhật";
    }
?>