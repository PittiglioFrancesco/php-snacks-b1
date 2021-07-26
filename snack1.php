<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e
una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte
 le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php

$partite = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Virtus Bologna",
        "puntiCasa" => rand(1, 100),
        "puntiOspite" => rand(1, 100)
    ],
    [
        "squadraCasa" => "Varese",
        "squadraOspite" => "Cantù",
        "puntiCasa" => rand(1, 100),
        "puntiOspite" => rand(1, 100)
    ],
    [
        "squadraCasa" => "V.L. Pesaro",
        "squadraOspite" => "Reyer Venezia",
        "puntiCasa" => rand(1, 100),
        "puntiOspite" => rand(1, 100)
    ],
    [
        "squadraCasa" => "Fortitudo Bologna",
        "squadraOspite" => "Virtus Roma",
        "puntiCasa" => rand(1, 100),
        "puntiOspite" => rand(1, 100)
    ],
    [
        "squadraCasa" => "Treviso",
        "squadraOspite" => "Reggiana",
        "puntiCasa" => rand(1, 100),
        "puntiOspite" => rand(1, 100)
    ]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1 PHP</title>
</head>
<!-- Olimpia Milano - Cantù | 55-60 -->
<body>

<ul>
        <?php for($i = 0; $i < count($partite); $i++) { ?>

        <li><?php echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiCasa"] . "-" . $partite[$i]["puntiOspite"] ?></li>

        <?php } ?>
</ul>
    
</body>
</html>