<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
              
                
        include ('Speedometer.php');        
        echo Speedometer::convertKmToMiles(10).'<br>';
       
        echo Speedometer::convertMilestoKm(10);
             
        ?>
    </body>
</html>
