<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "./components/pageHead.php"; ?>
        
    </head>
    <body>
        <header></header>
        <main>
            <?php 
                require_once "./classes/Classe.php"; 
                
                $classe1 = new Classe("Argomento1 scelto da me", "Argomento2 scelto da me");
                $classe1 -> variabile1 = "Valore che decido";

                var_dump($classe1);

                $classe2 = new Classe("Altro argomento1 scelto da me", "Altro argomento2 scelto da me");
                $classe2 -> variabile1 = "Altro valore che decido";

                var_dump($classe2);
            ?>
        </main>
        <footer></footer>
    </body>
</html>