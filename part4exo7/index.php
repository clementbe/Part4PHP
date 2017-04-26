<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo7p4</title>
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
            //Déclaration de la fonction
            function func($genre, $age) {
                /*si le genre est Homme et l'age supperieur ou egale a 18 le message 
                'Vous êtes un homme et vous êtes majeur' se retourne*/
                if ($age >= 18 && $genre == 'Homme') {
                    return 'Vous êtes un homme et vous êtes majeur';
                /*si le genre est Homme et l'age inferieur a 18 le message 
                'Vous êtes un homme et vous êtes mineur' se retourne*/
                } elseif ($age < 18 && $genre == 'Homme') {
                    return 'Vous êtes un homme et vous êtes mineur';
                /*si le genre est Femme et l'age inferieur a 18 le message 
                'Vous êtes une femme et vous êtes mineur' se retourne*/
                } elseif ($age < 18 && $genre == 'Femme') {
                    return 'Vous êtes une Femme et vous êtes mineur';
                /*si le genre est Femme et l'age supperieur ou egale a 18 le message 
                'Vous êtes un Femme et vous êtes majeur' se retourne*/
                } elseif ($age >= 18 && $genre == 'Femme') {
                    return 'Vous êtes une Femme et vous êtes majeur';
                }
            }
            //affichage du message avec les parametres.
            echo func('Femme', 17);
            ?>
        </div>
    </body>
</html>