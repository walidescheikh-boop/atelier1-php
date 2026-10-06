<?php

$a = 5;
$b = 10;
echo 'pour a et b = 5 et 10 :<br>';

$resultat = match ($a <=> $b) {
    -1 => "$a  inférieur de $b",
     0 => "$a  egal a $b",
     1 => "$a supérieur de $b"
};
echo $resultat;
?>
<p><a href="index.php">menu</a></p>

