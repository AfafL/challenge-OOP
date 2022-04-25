<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Vehicles.php');
        $car = new Car("Rouge",4,"Electrique");
//        $car->setParkBrake(false);
        
        try {
        echo $car->start();
        echo "tout va bien";
        } catch (Exception $e){
            $car->setParkBrake(false);
        }
        finally{
            echo 'Ma voiture roule comme un donut';
        }
        // si pas d'exception, on excute start normalement jusqu'au bout, et la fonction start retourn "Car started"
        // ensuite le bloc finally s'execute
        
        //s'il y a une exception, l'execution de start est suspendu a l'endroit de throw
        //ensuite le bloc catch du try est executé, et finalement le bloc finally est executé
        

        ?>
    </body>
</html>
