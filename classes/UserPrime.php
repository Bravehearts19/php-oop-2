<?php
    require_once __DIR__ . "/User.php";

    class UserPrime extends User {
        public $primePrivileges = [
            "discount" => 10,
            "features" => [
                "primeGaming" => true,
                "primeVideo" => true,
                "primeMusic" => true,
                "primePhotos" => true,
            ],
        ];       

        /* Costruttore */
        function __construct($_loginDataArray, $_identificationData, $_paymentData) {
            $this -> paymentData["primeAccount"] = true;

            $this -> setLoginData($_loginDataArray);
            $this -> setIdentificationData($_identificationData);
            $this -> setPaymentData($_paymentData);
        }

        /* Funzioni per $primePrivileges */
        public function getPrimePrivileges(){
            return $this->primePrivileges;
        }

        /* Funzioni generiche */

        
    };
?>