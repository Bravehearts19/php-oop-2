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
                require_once "./classes/User.php"; 
                require_once "./classes/UserPrime.php"; 
                
                $usernormal = new User(["username" => "SimoneGranata19", "password" => "MyPassword"], ["firstName" => "Simone", "lastName" => "Granata", "address" => ["Via F. Petrarca 12", "Bosnasco", "PV", "Italy", "27040"]], ["paymentMethods" => [], "cart" => []]);

                var_dump($usernormal);

                $userprime = new UserPrime();

                var_dump($userprime);
            ?>
        </main>
        <footer></footer>
    </body>
</html>