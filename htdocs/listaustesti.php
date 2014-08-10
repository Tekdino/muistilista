<?php

$lista = array("Kohta1", "Kohta2", "Kohta3", "Kohta4");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Listaustesti</title>
</head>
<body>
<h1>Listaustesti</h1>
<ul>
<?php foreach($lista as $asia) { ?>
<li><?php echo $asia; ?></li>
<?php } ?>
</ul>
</body>
</html>