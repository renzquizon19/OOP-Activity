<?php 

require_once "Product.php";
require_once "Medicine.php";

?>

<?php
    class Cart extends Medicine{
        private $cartItems = array();

        function addToCart($item){
            $this->cartItems[] = $item;
        }
        function viewCart(){
            $arrCartItems = $this->cartItems;
            foreach ($arrCartItems as $key => $value){
                echo
                '<ul>
                    <li><b>Name:</b> ' . $value->getName() . '</li>
                    <li><b>Description:</b> ' . $value->getDescription() . '</li>
                    <li><b>Price:</b> ' . ' ₱ ' . $value->getPrice() . '</li>
                    <li><b>Dose:</b> ' . $value->getDose() . ' mg ' . '</li>
                    <li><b>Type:</b> ' . $value->getType() . '</li>
                    <li><b>Exp Date:</b> ' . $value->getExpirationDate() . '</li>
                    <li><b>SRP:</b> ' . $value->computeSRP() . '</li>
                </ul>
                <hr>';
            }
        }
    
        function computeTotal(){
            $totalPrice = 0;
            foreach($this->cartItems as $key => $value){
                $totalPrice += $value->computeSRP();
            }
            echo '<b>Total Cart Amount: <b> ' . number_format($totalPrice,2);
        }
    }
?>