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