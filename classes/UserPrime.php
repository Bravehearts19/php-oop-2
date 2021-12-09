<?php
    require_once __DIR__ . "/User.php";
    require_once __DIR__ . "/../traits/PrimePrivileges.php";
    class UserPrime extends User {
        use PrimePrivileges;       

        /* Costruttore */
        function __construct($_loginDataArray, $_identificationData) {
            $this -> paymentData["primeAccount"] = true;

            parent::__construct($_loginDataArray, $_identificationData);
        }

        /* Funzioni per $primePrivileges */
        public function getPrimePrivileges(){
            return $this->primePrivileges;
        }

        /* Funzioni generiche */

        
    };
?>