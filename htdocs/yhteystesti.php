<?php

$tunnus = "Touati";
$salasana= "pistepiste1";

$yhteys = new PDO("pgsql:");
$yhteys->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sqlkysely = "SELECT 1+1 as two";

$kysely = $yhteys->prepare($sqlkysely);

if ($kysely->execute()) {
  //Tulos-muuttujan arvoksi pitäisi tulla numero kaksi.
  $tulos = $kysely->fetchColumn();

  //var_dump tulostaa muuttujan tyypin ja arvon käyttäjälle:
  var_dump($tulos);
}