<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container">
    <?php
    
    $fruits=['pomme'=>300, "orange"=>60,"fraise"=>200,"banane"=>70];

    echo "<table class='table table-primary'><tr><th>fruits<th>calories</tr>";
    foreach ($fruits as $key=>$value) {
        
        echo "<tr><td>  " ,$key,"</td><td>", $value,"</td><tr>";
    }
    echo"</table>";
    ?>
    </div>
</body>
</html> 