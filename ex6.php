<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="">
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>
    <input type="submit" name="somme" value="somme">
</form>
<?php
if (isset($_POST['somme'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $resultat = $num1 + $num2;
    echo "<p>resultat : " . $resultat . "</p>";
}
?>
<p><a href="index.php"> menu</a></p>
</body>
</html>