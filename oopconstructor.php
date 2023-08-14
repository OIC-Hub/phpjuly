<?php 
class Car{
    public $color;
    public $plate_number;
    public $model;
    public $year;
    public $name;
    function __construct($color, $plate_number, $model, $year, $name){
     $this->color=$color;
     $this->name =$name;
     $this->model= $model;
     $this->year =$year;
     $this->plate_number= $plate_number;   
    }} 
$volvo = new Car('black', '234', 'agbado', '2023', 'Volvo');
$corolla = new Car('Blue', 'JB 12 FeB', 'CE', '2014', 'Corolla')




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constroctor</title>
</head>
<body>
    <h2>Car Store</h2>
    <div>
    <p>Name: <?php echo $volvo->name ?></p>
    <p>Colour: <?php echo $volvo->color ?></p>
    <p>model: <?php echo $volvo->model ?></p>
    <p>Year: <?php echo $volvo->year ?></p>
    </div>
    <div>
    <p>Name: <?php echo $corolla->name ?></p>
    <p>Colour: <?php echo $corolla->color ?></p>
    <p>model: <?php echo $corolla->model ?></p>
    <p>Year: <?php echo $corolla->year ?></p>
    </div>
</body>
</html>