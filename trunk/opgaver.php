<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';
?>

<html>
	
	<head>
		
		
	</head>
	
	
	<body>
		<table>
		<?php
	$query = "SELECT log.beboerID as beboerID,
					log.opgaveID as opgaveID,
					log.dato as dato,
					beboer.navn as navn, 
					beboer.gang as gang FROM log INNER JOIN beboer ON beboer.ID=log.beboerID WHERE DATE(NOW()-INTERVAL 7 WEEK) < log.dato";
	$result = mysql_query($query);
	while ($row = mysql_fetch_object($result)) {?>
		<tr>
			<td><?php echo $row->navn; ?></td>
			<td><?php echo getOpgaveViaID($row->opgaveID)?></td>
			<td><?php echo us2eu($row->dato);?></td>
			
			
		</tr>
		
		
		
	<?php }?>
</table>

		
	</body>
	
</html>