<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo6p4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../part4exo1/index.php"><button class="button">Exercice 1</button></a>
            <a href="../part4exo2/index.php"><button class="button">Exercice 2</button></a>
            <a href="../part4exo3/index.php"><button class="button">Exercice 3</button></a>
            <a href="../part4exo4/index.php"><button class="button">Exercice 4</button></a>
            <a href="../part4exo5/index.php"><button class="button">Exercice 5</button></a>
            <a href="../part4exo6/index.php"><button class="button">Exercice 6</button></a>
            <a href="../part4exo7/index.php"><button class="button">Exercice 7</button></a>
            <a href="../part4exo8/index.php"><button class="button">Exercice 8</button></a>
        </div>
        <div class="php">
            <?php
            //déclaration de la fonction avec 3 parametres
                function concat($nom, $prenom, $age){
                  return 'Bonjour' . ' ' . $nom . ' ' . $prenom . ' ' . 'tu as' . ' ' . $age . 'ans.';
                }
                //affichage de la fonction avec les 3 parametres.
                echo concat('Benoit', 'Clément', 19)
            ?>
        </div>
    </body>
</html>