<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>

<body>

    <!-- ARRAY DI PARTENZA -->
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    ?>
    <?php

    // CICLO PER PRENDERE OGNI HOTEL E STAMPARE LE SUE PROPRIETà
    foreach ($hotels as $hotel)
        echo
        "<ul>
        <li><h1>$hotel[name]</h1></li>
        <li><p>Description: $hotel[description]</p></li>
        <li><p>Parking: $hotel[parking]</p></li>
        <li><p>Vote: $hotel[vote]</p></li>
        <li><p>Distance to center: $hotel[distance_to_center]</p></li>
        </ul>"
        ?>

    </body>

    </html>