<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 
    $calendario = [
        [
            'casa' =>'Olimpia Milano',
            'ospiti' => 'Cantù',
            'punti_casa' => 55,
            'punti_trasferta' => 60
        ],
        [
            'casa' => 'Virtus Roma',
            'ospiti' => 'Juve Caserta',
            'punti_casa' => 76,
            'punti_trasferta' => 74
        ],
        [
            'casa' => 'Dinamo Sassari',
            'ospiti' => 'Reyer Venezia',
            'punti_casa' => 68,
            'punti_trasferta' => 60
        ],
        [
            'casa' => 'Virtus Bologna',
            'ospiti' => 'Fortitudo Bologna',
            'punti_casa' => 87,
            'punti_trasferta' => 86
        ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php for($i = 0; $i < count($calendario); $i++) { ?>
        <li>
            <?php echo $calendario[$i]['casa']?> - <?php echo $calendario [$i]['ospiti'] ?> 
            | <?php echo $calendario [$i]['punti_casa'] ?> - <?php echo $calendario [$i]['punti_trasferta'] ?>
        </li>
        <?php } ?>
    </p>
</body>
</html>