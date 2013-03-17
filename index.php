<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>



		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>KFUM Rengøringsplan</title>





		<link href="CSS/style.css" rel="stylesheet" type="text/css" />


</head>


<body>
	<table>
	<?
/*	$opgave1 = new opgaver();
	$opgave1->setGang(0);
	$opgave1->setOpgave("Coridor");
	
	$opgave2 = new opgaver();
	$opgave2->setGang(0);
	$opgave2->setOpgave("Basementroom");
	
	
	$opgave3 = new opgaver();
	$opgave3->setGang(0);
	$opgave3->setOpgave("Cooking");
	
	
	$beboer1 = new beboer("Bjarke Carstens", 1, 5);
	$beboer2 = new beboer("Signe", 1, 5);
	$beboer3 = new beboer("Bjarke", 2, 5);
	$beboer4 = new beboer("Martha", 2, 5);
	$beboer5 = new beboer("Irina", 2, 5);
	$beboer6 = new beboer("Niels", 2, 5);
	$beboer7 = new beboer("Alexandra", 1, 5);
	
	$alleBeboer = array($beboer1, $beboer2, $beboer3, $beboer4, $beboer5, $beboer6, $beboer7);
	
	
	$persons = new person($alleBeboer);
	print_r($persons->beboer);
/*	foreach ($persons->beboer as $key => $value) {
		echo "Personen: " . $value->getNavn . "</br>";
	}
	*/
	$query = "SELECT * FROM beboer";
	$result = mysql_query($query) or die ("Error in query");
	$query2 = "SELECT * FROM opgaver WHERE gang=0";
	$result2 = mysql_query($query2) or die ("Error in query");
	while($work = mysql_fetch_object($result2)){
		$opgaver[] = $work->opgave;
	}
	var_dump($opgaver);
	$i=0;
	while ($row = mysql_fetch_object($result)){
		?><tr><td><?
		echo $row->navn . " Får opgaven " . $opgaver[$i] . "<br>";
		if ($i > 1){$i=0;}else {$i++;}
	?></td></tr><?
	}
	?>
	
	
	
	
	
	
	</table>
	
	
	
	<?
	/*$antalBeboere = 7;
	$query = "SELECT * FROM log WHERE opgaveID > 4 ORDER BY ID DESC LIMIT 3";
	$result = mysql_query($query) or die ("Error in query");
	while ($row = mysql_fetch_object($result)){
		if ($row->beboerID == $antalBeboere){$beboerID = 1;}else {$beboerID = $row->beboerID+1;}
		$dato = new DateTime($row->dato);
		$dato->modify('+1 week');
		$dato = $dato->format('Y-m-d');
		$insertQuery = "INSERT INTO log (beboerID, opgaveID, dato) VALUES ($beboerID, $row->opgaveID, '$dato')";
		$insertResult = mysql_query($insertQuery);
	}*/
	
	
	$klynge1 = "SELECT * FROM beboer WHERE gang=1";
	$klynge1Res = mysql_query($klynge1);
	$antalPersonerIKlyng1 = mysql_affected_rows();
	while($g = mysql_fetch_object($klynge1Res)){
		$personerIKlynge1[] = $g->ID;
	}
	$query3 = "SELECT 	log.beboerID as beboerID,
						log.opgaveID as opgaveID, 
						log.dato as dato,
						beboer.navn as navn,
						beboer.gang as gang FROM log INNER JOIN beboer ON log.beboerID=beboer.ID WHERE log.opgaveID = 1 OR log.opgaveID = 2 ORDER BY log.ID DESC LIMIT 2";
	$result3 = mysql_query($query3);
	while($row = mysql_fetch_object($result3)){
		echo $row->beboerID ." " . $row->opgaveID ." ". $row->dato ." ". $row->navn ." ". $row->gang . "<br>";
		var_dump($personerIKlynge1);
	}
	
	
	
	
	
	
	
	
	?>
</body>


</html>