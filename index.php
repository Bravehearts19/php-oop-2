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
                
                $userNormal = new User(
                    [
                        "username" => "SimoneGranata19",
                        "password" => "MyPassword"
                    ],
                    [
                        "firstName" => "Simone",
                        "lastName" => "Granata", 
                        "address" => [
                            "street" => "Via F. Petrarca 12", 
                            "city" => "Bosnasco",
                            "province" => "PV",
                            "country" => "Italy",
                            "postalCode" => "27040",
                        ]
                    ]
                );

                $userNormal->addNewPaymentMethod("paymentMethod");

                var_dump($userNormal);

                $userPrime = new UserPrime(
                    [
                        "username" => "SimoneGranata19",
                        "password" => "MyPassword"
                    ],
                    [
                        "firstName" => "Simone",
                        "lastName" => "Granata", 
                        "address" => [
                            "street" => "Via F. Petrarca 12", 
                            "city" => "Bosnasco",
                            "province" => "PV",
                            "country" => "Italy",
                            "postalCode" => "27040",
                        ]
                    ]
                );

                var_dump($userPrime);
            ?>
        </main>
        <footer></footer>
    </body>
</html>