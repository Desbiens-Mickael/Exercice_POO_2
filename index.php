<?php
require_once './Bicycle.php';
require_once './Car.php';
require_once './Truck.php';

$bike_1 = new Bicycle("rouge", 2, 2);
$bike_2 = new Bicycle("bleu", 1, 2);
$car_1 = new Car("noir", 4, "éssence");
$car_2 = new Car("jaune", 2, "éléctrique");
$truc_1 = new Truck(100, 'noir', 3, 'gasoil');
$truc_2 = new Truck(200, 'bleu', 4, 'éléctrique');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les classes</title>
</head>
<body>
    <?php
    echo $bike_1->forward();
    echo '<br> Vitesse du vélo : ' . $bike_1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike_1->brake();
    echo '<br> Vitesse du vélo : ' . $bike_1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike_1->brake();  
    ?>

    <br><br><br>
    <?php
    echo $bike_2->forward();
    echo '<br> Vitesse du vélo : ' . $bike_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike_2->brake();
    echo '<br> Vitesse du vélo : ' . $bike_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike_2->brake();  
    ?>
    
    <br><br><br>

    <?php
    echo $car_1->forward();
    echo '<br> Vitesse de la voiture : ' . $car_1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car_1->brake();
    echo '<br> Vitesse de la voiture : ' . $car_1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car_1->brake();  
    ?>

    <br><br><br>

    <?php
    echo $car_2->forward();
    echo '<br> Vitesse de la voiture : ' . $car_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car_2->brake();
    echo '<br> Vitesse de la voiture : ' . $car_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car_2->brake();  
    ?>

    <br><br><br>

    <?php
    echo $truc_1->forward();
    $truc_1->setCurrentSpeed(50);
    echo '<br> Vitesse du camion : ' . $truc_1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $truc_1->brake();
    echo '<br> Vitesse du camion : ' . $truc_1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $truc_1->brake() . '<br>';
    echo $truc_1->isFull($truc_1->getLoad());
    ?>

    <br><br><br>

    <?php
    echo $truc_2->forward();
    echo '<br> Vitesse du camion : ' . $truc_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $truc_2->brake();
    echo '<br> Vitesse du camion : ' . $truc_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $truc_2->brake() . '<br>';
    $truc_2->setLoad(100);
    echo $truc_2->isFull($truc_2->getLoad());  
    ?>

</body>
</html>