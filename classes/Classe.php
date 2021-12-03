<?php
    class Classe {
        public $variabile1;
        public $variabile2 = "Valore di default";

        /* Costruttore */
        function __construct($_argomento1, $_argomento2) {
            $this -> setVariabile1($_argomento1);
            $this -> setVariabile2($_argomento2);
        }

        /* Funzioni per $variabile1 */
        public function getVariabile1() {
            return $this -> variabile1;
        }
        public function setVariabile1($newValue) {
            $this -> variabile1 = $newValue;
        }

        /* Funzioni per $variabile2 */
        public function getVariabile2() {
            return $this -> variabile2;
        }
        public function setVariabile2($newValue) {
            $this -> variabile1 = $newValue;
        }

        /* Funzioni generiche */

    };
?>
