<?php
	include 'ketnoi/ketnoicsdl.php';
	$sql = "SELECT * FROM sanpham ORDER BY id DESC";
	$kq = mysqli_query($con, $sql);
	if (mysqli_num_rows($kq)>0) {
		while ($row = mysqli_fetch_array($kq)) {?>
		    <li><a href="">
		    	<img src="<?php echo $row['Hinhanh']; ?>">
		    	<p style="color: blue;"><i><?php echo $row['TenSP']; ?></i></p>
		    	<p><?php echo "Giá:".number_format($row['GiaSP'])." vnđ"; ?></p>
		    	</a>
		    	<input type="number" name="sl" value="1" style="width: 30px; height: 25px">
                <input type="submit" name="btnMuaNgay" value="Mua ngay">
                <input type="submit" name="btnXemChitiet" value="Xem chi tiết">
			</li>
		<?php }
	}else {
		echo "Không có dữ liệu";
	}
?>