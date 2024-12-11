<?php
// Dichiarazione di variabili
$numRandom = array();

//Genera 10 numeri randomici
for ($i = 0; $i < 10; $i++) {
    $numRandom[] = rand(0, 100);
}

// Calcola il minimo, il massimo e la media
$min = min($numRandom);
$max = max($numRandom);
$media = array_sum($numRandom) / count($numRandom);

$pari_assoc = array();
for ($i = 0; $i < count($numRandom); $i++){
    if($numRandom[$i] % 2 == 0){
        $pari_assoc["p" . (count($pari_assoc) + 1)] = $numRandom[$i];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Es2 PHP</title>
</head>
<body>
    <div class = "div1">
        <?php
            echo "Numeri generati: <br>" . implode(", ", $numRandom);
            echo "<br>Min: $min <br>";
            echo "Max: $max <br>";
            echo "Media: $media <br>";
            echo "Numeri in ordine inverso: <br>" . implode(", ", array_reverse($numRandom)) . "<br>";
            foreach ($pari_assoc as $key => $value) {
                echo "$key => $value<br>";
            }
        ?>

    </div>
</body>
</html>