<?php

require_once "libs/tietokantayhteys.php"; 
require_once "libs/models/asiakas.php";

//Lista asioista array-tietotyyppiin laitettuna:
$lista = Asiakas::etsiKaikkiAsiakkaat();
?>
<!DOCTYPE HTML>
<html>
<head><title>Tietokantatesti</title></head>
<body>
<?php echo $asia->etsiKaikkiAsiakkaat(); ?>

<h1>Tietokantatesti</h1>
<ul>
<?php foreach($asia) { ?>
<li><?php echo $asia; ?></li>
<?php } ?>
</ul>

</body>
