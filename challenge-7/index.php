
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include ('Personne.php');
        $personne = new Personne ("mon nom", "mon prenom", "paris", "15/02/1989");
        $personne->afficher();
        echo "il est agee de ".$personne->age();
        ?>
    </body>
</html>
