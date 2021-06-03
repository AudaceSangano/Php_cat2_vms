<!DOCTYPE html>
<html>
<head>
	<title>Display Records</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
	<tr style="background:#CCC">
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
	</tr>
	<?php
	$i=1;
	foreach($dataa as $row)
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row->Email."</td>";
		echo "</tr>";
		$i++;
	}
	?>
</table>
<?php echo $i; ?>
</body>
</html>
