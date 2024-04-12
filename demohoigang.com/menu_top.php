<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content="text/html; charset=utf-8" />
</head>
<body>
<?php
	require('./ketnoi/ketnoicsdl.php');
	$sql = "select * from danhmucsp order by iddm desc";
	$query = mysqli_query($con, $sql);
  	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_array($query)){?>
        <li><a href="index.php?action=danhmuc&dm=<?php echo $row['iddm']; ?>"><?php echo $row['TenDM']; ?></a></li>
        <?php
		}
	}
?>
</body>
</html>