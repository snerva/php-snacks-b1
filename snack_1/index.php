<?php
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

$partite = [
    [
        'home_team' => 'olimpia',
        'guest_team' => 'milano',
        'home_score' => 54,
        'guest_score' => 70
    ],
    [
        'home_team' => 'bari',
        'guest_team' => 'roma',
        'home_score' => 78,
        'guest_score' => 35
    ]
];

var_dump($partite);


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
    <ul>
        <?php foreach ($partite as $partita) : ?>
            <li> <?php echo $partita['home_team'] . '-' . $partita['guest_team'] ?> | <?php echo $partita['home_score'] . '-' . $partita['guest_score'] ?> </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>