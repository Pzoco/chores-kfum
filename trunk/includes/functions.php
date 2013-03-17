<?php

class log{
	private $beboer;
	private $opgave;
	
	function setBeboer($value){
		$this->beboer = $value;
	} 
	function getBeboer(){
		return $this->beboer;
	}
	function setOpgave($value){
		$this->opgave = $value;
	} 
	function getOpgave(){
		return $this->opgave;
	}
	
	
}

class opgaver{
	
	private $ID;
	private $opgave;
	private $gang;

	function getID()
	{
		return $this->ID;	
	}
		
	function getOpgave()
	{
		return $this->opgave;	
	}
	function setOpgave($opg)
	{
		$this->opgave = $opg;		
	}
	
	function getGang()
	{
		return $this->gang;		
	}
	
	function setGang($gang)
	{
		$this->gang = $gang;
	}
	
	
	
}

class beboer{
	
	private $ID;
	private $navn;
	private $gang;
	private $opgave;
	
	
	function __construct($navn, $gang, $opgave){
		$this->setNavn($navn);
		$this->setGang($gang);
		$this->setOpgave($opgave);
	}
	
	function getID()
	{
		return $this->ID;
	}
	
	
	function getNavn()
	{
		return $this->navn;
	}
	function setNavn($navn)
	{
		$this->navn = $navn;
	}
	
	function getGang()
	{
		return $this->gang;
	}
	function setGang($gang)
	{
		$this->gang = $gang;
	}
	function setOpgave($opg){
		$this->opgave[] = $opg;
	}
	function getOpgave(){
		return $this->opgave;
	}
	
	
}
class person{
	public $beboer;
	function __construct($value){
		$this->beboer[] = $value; 
	}
	
}


/*function updaterOpgaver()
{
//Tag en beboer og list alle hans tidligere opgaver

$log = new log();
$query = "SELECT * FROM beboer";
$result = mysql_query($query) or die ("Error in query");
while ($row = mysql_fetch_object($result))
{
	$beboer = new beboer();
	$beboer->setNavn($row->navn);
	$beboer->setGang($row->gang);
	$log->setBeboer($beboer);
	
}

	
	$query = "SELECT log.ID, log.beboerID, log.opgaveID, log.dato, opgaver.opgave, opgaver.ID FROM log, opgaver WHERE DATE(NOW()-INTERVAL 7 WEEK) < log.dato AND opgaver.gang = 0";
	$result = mysql_query($query) or die("Error in query!" . mysql_error());
	
	$queryFaellesOpgaver = "SELECT * FROM opgaver WHERE gang = 0 ORDER BY beboerID ASC";
	$resultFaellesOpgaver = mysql_query($queryFaellesOpgaver) or die("Error" . mysql_error()); 
	
	
	//Trivial case - empty
	Fyldt de 3 opgaver med 3 beboer
	
	
	//Næste uge
	Tjek beboerID med opgaveID, og roter
	
	while($row = mysql_fetch_object($resultFaellesOpgaver))
	{
		
		
		
		
		
	}
	
	
	
	
	
	 
} */




function us2eu($date) {
	$date = explode("-", $date);
	$date = array($date[2], $date[1], $date[0]);
	return $n_date = implode("-", $date);
}
function getOpgaveViaID($ID){
	$query = "SELECT opgave FROM opgaver WHERE ID=$ID";
	$result = mysql_query($query) or die ("Error in query");
	if (mysql_affected_rows()==1){
	while($row = mysql_fetch_object($result)){
		return $row->opgave;
	}
	}
	return false;
}







?>