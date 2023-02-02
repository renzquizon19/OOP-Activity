<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <?php
    private $name;
	private $description;
	private $price;
	private $srp;

    class Product {

        function setName(){
            $this->name = $name;
        }

	    function setDescription(){
            $this->description = $description;

        }
	    function setPrice(){
            $this->price = $price;

        }
	
	    function getName(){
            echo '<ul>';
                echo '<li><b>Name:</b> ' . $this->setName($this->name) . '</li>';
            echo '</ul>';

        }
	    function getDescription(){
            echo '<ul>';
                echo '<li><b>Description:</b> ' . $this->setDescription($this->description) . '</li>';
            echo '</ul>';

        }
	    function getPrice(){
            echo '<ul>';
                echo '<li><b>Price:</b> ' . $this->setPrice($this->price) . '</li>';
            echo '</ul>'; 
        }
	
	    function computeSRP() {
		    price * 1.5;

    }
}
    ?>
</body>
</html>