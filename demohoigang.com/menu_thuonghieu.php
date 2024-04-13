<meta charset="utf-8" />
<form method="post" action="View_theohangsx.php">
<?php
	require('./ketnoi/ketnoicsdl.php');
	$sql = "select * from hangsx where anhien=1 order by thutu asc";
	$query = mysqli_query($con, $sql);
  	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_array($query)){?>
        <li><a href="index.php?action=hang&hangsx=<?php echo $row['idhang']; ?>"><?php echo $row['TenHang']; ?></a></li>
        <?php
		}
	}
?>
</form>