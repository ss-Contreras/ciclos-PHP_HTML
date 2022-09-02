<?php

$usuario = ["Persona 1", "Persona 2", "Persona 3"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con ciclos</title>
</head>
<body>
    <ul>    
        <?php for($i = 0; $i <10; $i++): ?>
            <li><?= $i  ?></li>
        <?php endfor; ?>

        <?php while(false):?>

        <?php endwhile;?>
    </ul>
    <h1>lista de usuarios:</h1>

    <ul>
            <?php foreach($usuario as $username): ?>
            
                <li><?= $username ?></li>

            <?php endforeach; ?>
    </ul>

</body>
</html>