<!DOCTYPE html>
<html>
<head>
	<title>Sử dụng cấu trúc Switch case</title>
</head>
<body>
	<div style="text-align: center;">
		<form method="post">
			<h1>Thực hành các phép tính</h1>
			Nhập số a <input type="text" name="soa"><br><br>
			Nhập số b <input type="text" name="sob"><br><br>
			<select name="pheptinh">
				<option value="">Chọn toán tử thực hiện</option>
                <option value="1">Phép cộng</option>
                <option value="2">Phép trừ</option>
                <option value="3">Phép nhân</option>
                <option value="4">Phép chia</option>
            </select>
            <input type="submit" name="btnTinh" value="Tính">
		</form>
		<?php
			if (isset($_POST["btnTinh"])) {
				$soa=$_POST['soa'];
				$sob=$_POST['sob'];
				$pheptinh=$_POST['pheptinh'];
				if ($soa==null or $sob==null) {
					echo "Bạn chưa nhận số a hoặc số b";
				}else{
					Switch ($pheptinh){
						case '1':
							echo "Tổng của phép cộng số ".$soa." và ".$sob." là:".($soa+$sob);
							break;
						case '2':
							echo "Phép trừ số ".$soa." và ".$sob." là:".($soa-$sob);
							break;
						case '3':
							echo "Phép nhân số ".$soa." và ".$sob." là:".($soa*$sob);
							break;
						case '4':
							echo "Phép chia số ".$soa." và ".$sob." là:".($soa/$sob);			# code...
							break;
						default:
							echo "Bạn nhập giá trị sai.";
							break;						
					}
				}
			}
		?>
	</div>
</body>
</html>