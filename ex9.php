<?php
$r = rand(1, 100);
if ($r % 3 == 0 && $r % 5 == 0) {
    echo "$r est un multiple de 3 et de 5";
} else {
    echo "$r n'est pas un multiple de 3 et de 5";
}
?>
<p><a href="index.php">Retour au menu</a></p>