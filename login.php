<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập hệ thống</title>
</head>
<body>
	<form method="POST">
	<div style="text-align: center;">
		<h1>Đăng nhập</h1>
		<div>
			<h3>UserName:</h3>
			<input type="text" name="UserName"><br>
			<h3>PassWord:</h3>
			<input type="text" name="PassWord">
		</div>
		<div>
			<br>
			<input type="submit" name="btnlogin" value="Đăng nhập" style="width: 100px">
			<input type="submit" name="btnxoa" value="Xoá" style="width: 100px">
		</div>
	</div>
	</form>
	<?php
		
		if (isset($_POST['btnlogin'])) {
			$UserName=$_POST['UserName'];
			$PassWord=$_POST['PassWord'];
			if ($UserName=="admin" && $PassWord=="123") {
			// echo "Đăng nhập thành công.";
			include 'vidu1.php';
			}else
			{
				echo "UserName hoặc PassWord không đúng.";
			}
		}
		
	?>
</body>
</html>