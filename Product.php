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
           return $this->$name;

        }
	    function getDescription(){
            return $this->$description;

        }
	    function getPrice(){
            return $this->$price;
        }
	
	    function computeSRP() {
            return $this->price * 1.5;

    }
}
    ?>
</body>
</html>