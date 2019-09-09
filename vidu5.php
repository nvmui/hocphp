<!DOCTYPE>
<html>
<head>
	<title>Vị dụ về vòng lặp for</title>
</head>
<body>
	<div style="text-align: center; width: 400px; height: 300px; border-style: 1px">
		<div>
		<h1>Thực hành vòng lặp for</h1>
		<select>
			<?php 
				for ($i=1; $i <=12 ; $i++) 
				{ 
					echo "<option>$i</option>";
				}
			?>
		</select>
		<h1>Thực hành vòng lặp while</h1>
		<?php
			$i=1; $j=9;
			while ($i <= 10) {
				$kq=$i*$j;
				echo $j." * ".$i." = ".$kq."<br>";
				$i++;
			}
		?>
		<h1>Thực hành vòng lặp foreach</h1>
		<?php
			$meal = array('breakfast' => 'Walnut Bun',
	              'lunch' => 'Cashew Nuts and White Mushrooms',
	              'dinner' => 'Eggplant with Chili Sauce');

			print "<table border=‘1’>\n";
			foreach ($meal as $key => $value) {
	    		print "<tr><td>$key</td><td>$value</td></tr>\n";
			}
			print '</table>';
		?>
		</div>
	</div>
</body>
</html>