<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
include 'challenge2.php';
$camion = new Camion("Rouge",4,"Electrique",800);

echo $camion->start().'<br>';
echo $camion->forward().'<br>';
echo $camion->brake().'<br>';
$camion->setCapacity(400);
$camion->setLoad(300);
echo $camion->loadingState().'<br>';
$camion->setLoad(500);
echo "current load: ".$camion->getLoad();
        ?>
    </body>
</html>
