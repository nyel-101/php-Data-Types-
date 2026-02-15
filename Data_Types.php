#php data types
#string (text Values)
#int (Whole numbers)
#float(decimal numbers)
#bool(true or false)
#array(multiple values)
#object(stores data as object)
#null(empty variable)
#resource (references external resources)


<?php

$x = " hello world";
var_dump($x); #string








?>









<?php

$x = 5985;
var_dump($x)#int

?>


<?php

$x = true;
var_dump($x);#bool

?>

#php float data type
<?php

$x= 10.365;
var_dump($x);


?>



#php array data type

<?php

$cars = array("Volvo","bmw","toyota");
var_dump($cars);



?>

#php object data type

<?php
class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;



    }
    public function message(){
        return "My Car is a ". $this->color . "" . $this->model . "!";
    }

}


$myCar = new Car("res", "Volvo");
var_dump($myCar);





?>



#php null data type

<?php
$x = 'helloworld';
$x = null;
var_dump($x);






?>


#Changing data type

<?php

$x = 5;
var_dump($x);

$x = "hello";
var_dump($x);






