<?php
class Asiakas {

	private $asiakasID;
	private $tunnus;
	private $email;
	private $salasana;

	public function __construct($asiakasID, $tunnus, $email, $salasana) {
		$this->asiakasID = $asiakasID;
		$this->tunnus = $tunnus;
		$this->email = $email;
		$this->salasana = $salasana;
		}

	/* getterit ja setterit */

	public static function etsiKaikkiAsiakkaat() {
  	$sql = "SELECT asiakasID, tunnus, email, salasana FROM asiakas";
  	
	$kysely = getTietokantayhteys()->prepare($sql); 
	$kysely->execute();
    
  	$tulokset = array();
  	foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
    	$asiakas = new Asiakas();
    	$asiakas->setId($tulos->AsiakasID);
    	$asiakas->setTunnus($tulos->tunnus);
	$asiakas->setEmail($tulos->email);
    	$asiakas->setSalasana($tulos->salasana);

    	$tulokset[] = $asiakas;
  	}
  	return $tulokset;
}
}