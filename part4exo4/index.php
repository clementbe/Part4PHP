<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo4p4</title>
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
            //déclaration de la fonction
            function number($firstNum, $secondNum) {
                //si le 1er chiffre est plus grand que le 2eme le message se dessous se retourne
                if ($firstNum > $secondNum) {
                    return 'Le premier chiffre est plus grand';
            //si le 1er chiffre est plus petit que le 2eme le message se dessous se retourne
                } elseif ($firstNum < $secondNum) {
                    return 'Le premier chiffre est plus petit';
                //si les deux chiffres sont identique le message se dessous se retourne
                } elseif ($firstNum == $secondNum) {
                    return 'Les chiffres sont identiques';
                }
            }
            //Déclaration des deux chiffres en condition
            echo number(15 , 7);
            ?>
        </div>
    </body>
</html>