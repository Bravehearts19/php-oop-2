<?php
    class User {
        protected $loginData = [
            "username" => null,
            "password" => null,
        ];
        protected $identificationData = [
            "firstName" => null,
            "lastName" => null,
            "address" => [
                "street" => null,
                "city" => null,
                "province" => null,
                "country" => null,
                "postalCode" => null,
            ],
        ];
        protected $paymentData = [
            "paymentMethods" => [],
            "cart" => [],
            "shippingFees" => null,
            "shippingDuration" => null,
            "primeAccount" => false,
        ];
        

        /* Costruttore */
        function __construct($_loginDataArray, $_identificationData) {
            $this -> setLoginData($_loginDataArray);
            $this -> setIdentificationData($_identificationData);
            $this -> setPaymentData();
        }

        /* Funzioni per $loginData */
        protected function getLoginData() {
            return $this -> loginData;
        }
        protected function setLoginData(array $newValue) {
            if(strlen($newValue["username"]) < 4 || strlen($newValue["password"]) <= 5) {
                return;
            } else {
                $this -> loginData["username"] = $newValue["username"];
                $this -> loginData["password"] = $newValue["password"];
                return $this;
            }
        }

        /* Funzioni per $identificationData */
        protected function getIdentificationData() {
            return $this -> identificationData;
        }
        protected function setIdentificationData(array $newValue) {
            if(strlen($newValue["firstName"]) < 1 || strlen($newValue["lastName"]) < 1) {
                return;
            } else {
                $this -> identificationData["firstName"] = $newValue["firstName"];
                $this -> identificationData["lastName"] = $newValue["lastName"];
                if (isset($newValue["address"])) {
                    $this -> identificationData["address"] = $newValue["address"];
                }
                return $this;
            }
        }

        /* Funzioni per $paymentData */
        protected function getPaymentData() {
            return $this -> paymentData;
        }
        protected function setPaymentData() {
            if($this -> paymentData["primeAccount"] === false) {
                $this -> paymentData["shippingFees"] = 3; 
                $this -> paymentData["shippingDuration"] = 6; 
            } else {
                $this -> paymentData["shippingFees"] = 0; 
                $this -> paymentData["shippingDuration"] = 2;
            }
            /* $this -> paymentData["paymentMethods"] = $newValue["paymentMethods"];
            $this -> paymentData["cart"] = $newValue["cart"]; */
            return $this;
        }

        /* Funzioni generiche */

    };
?>
