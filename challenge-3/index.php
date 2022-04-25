<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
include_once 'Vehicles.php';
include_once 'HighWays.php';

$highWay = new MotorWay();

$highWay->addVehicle(new Car("Rouge",4,"Electrique"));
var_dump($highWay);
        ?>
    </body>
</html>
