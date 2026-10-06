<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num" placeholder="tester si pair" required>
        <button type="submit">envoyer</button>
    </form>
    <?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];
        if($num%2 == 0) {
            echo "$num pair";
        } else {
            echo "$num impair";
        }
    }
     ?>
     <p><a href="index.php">menu</a></p>
</body>
</html>