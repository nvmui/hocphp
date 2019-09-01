<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: center;">
		<form method="POST">
			<h3>Nhập a</h3>
			<input type="number" name="a">
			<h3>Nhập b</h3>
			<input type="number" name="b">
			<h3>Nhập c</h3>
			<input type="number" name="c">
			<br>
			<input type="submit" name="btngiai" value="Giải phương trình">
		</form>
		<?php
		if (isset($_POST['btngiai'])) {
			$soa=$_POST['a'];
			$sob=$_POST['b'];
			$soc=$_POST['c'];
			if ($soa<>0) {
				$deta=$sob*$sob-4*$soa*$soc;
				if ($deta>0) {
					echo "Phương trình có 2 nghiệm x1 = ".(-$sob-sqrt($deta))/2*$soa." x2= ".(-$sob-sqrt($deta))/2*$soa;
				} elseif ($deta==0) {
					echo "Phương trình có nghiệm kép x1=x2= ".-$sob/2*$soa;
				}else{
					echo "Phương trình vô nghiệm.";
				}
			} elseif ($soa==0) {
				echo "Phương trình có 1 nghiệm x= ".((int)$soc/(int)$sob);
			}
			
		}
	?>
	</div>

</body>
</html>