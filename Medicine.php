<?php
    require_once "Product.php";

    class Medicine extends Product {
    
        private $dose;
        private $type;
        private $expirationDate;
        
        function setDose(){
            $this->dose = $dose;
        }
        function setType(){
            $this->type = $type;
        }
        function setExpirationDate(){
            $this->expirationDate = $expirationDate;
        }
        
        function getDose(){
            return $this->$dose;
        }
        function getType(){
            return $this->$type;
        }
        function getExpirationDate(){
            return $this->$expirationDate;

        }
        
        function computeSRP() {
            return $this->price * 2;
        }
    }
?>