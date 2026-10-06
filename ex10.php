<?php

$r = rand(1, 100); 
while ($r % 2 != 0) {
    $r = rand(1, 100);
}

echo "lentier pair obtenu : $r";

?>
<p><a href="index.php">Retour au menu</a></p>