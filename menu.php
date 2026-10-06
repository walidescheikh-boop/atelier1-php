<?php
function display_menu() {
    
    $ex = [
        1  => "ex1.php", 2  => "ex2.php", 4  => "ex4.php", 5  => "ex5.php", 6  => "ex6.php", 7  => "ex7.php", 8  => "ex8.php",9  => "ex9.php", 10 => "ex10.php", 11 => "tab.php"     
    ];

    echo "<h2>Exercices:</h2><ul>";
    
    foreach ($ex as $num => $page) {
        echo "<li class='nav-item'><a class='nav-link' href='$page'>numero  $num</a></li>";
    }
    echo "</ul>";
}
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <meta name="viewport" content="width=*, initial-scale=1.0">
   
 </head>
 <body>
    
 </body>
 </html>