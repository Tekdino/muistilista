<?php
  require 'libs/tietokantayhteys.php';
  $kysely = getTietokantayhteys()->prepare("SELECT * FROM asiakas");
  $kysely->execute();
  
  echo $kysely->fetchColumn();