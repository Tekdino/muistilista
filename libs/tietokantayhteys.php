<?php

function getTietokantayhteys() {

	static $yhteys = null;

	if ($yhteys == null) {

	$yhteys = new PDO('psql:');
	$yhteys->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}

	return $yhteys;

}