<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
include 'challenge1.php';
$car1 = new Car("Rouge",4,"Electrique");
$car2 = new Car("Blanche",4,"Essence");

echo $car1->start().'<br>';
echo $car1->forward().'<br>';
echo $car1->brake().'<br>';

 


        ?>
    </body>
</html>
