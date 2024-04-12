<meta charset="utf-8" />
<?php
    require('./connet/connet.php');
	if(isset($_GET['dm'])){
		$id=$_GET['dm'];
  	$sql = "select * from sanpham where iddm=$id order by id desc";
  	$query = mysqli_query($con, $sql);
  	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_array($query)){?>
        <div>
        	<form method="post" action="dathang.php?action=add&id=<?php echo $row["id"];?>" >
			<li><a href="#">
				<img src="<?php echo $row['Hinhanh'];?>" style="width:80px; height:80px"/>
				<?php echo "<p>".$row['TenSP']."</p>";
				echo "<p style='color:#F00';>Giá: ".number_format($row['GiaSP'])."đ</p>";echo "</a>";?>
				<input type="text" name="quantity" class="form-control" value="1" style=" width:30px;" />  
				<input type="hidden" name="hidden_name" value="<?php echo $row["TenSP"]; ?>" />  
				<input type="hidden" name="hidden_price" value="<?php echo $row["GiaSP"]; ?>" /> 
				<?php echo "<input type='submit' name='btn_dathang' style='margin-top:5px; width:70px' value='Mua ngay'/>";
				//echo "<p><a href='#".$row['id']."'>Chi tiết</a></p>";
				echo "<input type='submit' name='chitiet' style='margin-top:5px; width:70px' class='btn btn-success' value='Chi tiết' />";
				//echo "<p><a href='dathang.php?=".$row['id']."' style='font-size:16px;'>Mua ngay</a></p>";
				?>        
			</li>
			</form>
		</div>
        <?php							
		}
	}
	}
?>