<?php
	// echo "<script language='javascript'>
 //    	alert('Đăng nhập quản trị thành công');
 //    	window.open('index.php','_self', 1);
 //    	</script>";
	$matkhau = "A";
	echo "Mật khâu".$matkhau;
	echo "Mã hóa MD5 ".$matkhau." là ".md5($matkhau);
	echo "</br>";
	echo "Mã hóa MD5 của A".md5('A');
	$SESSION=1;
   $mota = $_POST['1'];   //nl2br($_POST['mota']);
   echo $mota
?>

