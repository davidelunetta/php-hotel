<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
</head>
<body>
    <?php
    include "../Models/db.php";
    ?>
    <?php
     foreach ($hotels as $hotel) {
        echo '<h2>' . $hotel['name'] . '</h2>';
        echo '<p>' . $hotel['description'] . '</p>';
        echo '<p>Parcheggio disponibile: ' . ($hotel['parking'] ? 'Sì' : 'No') . '</p>';
        echo '<p>Voto: ' . $hotel['vote'] . '</p>';
        echo '<p>Distanza dal centro: ' . $hotel['distance_to_center'] . ' km</p>';
        echo '<hr>';
     }
    ?>
    
</body>
</html>