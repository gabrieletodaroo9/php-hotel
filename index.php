<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    //  ARRAY DI PARTENZA
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
    <div class="container">
        <h1 class="text-center p-4">Hotels in the city</h1>

        <ul class="list-group list-group-horizontal fw-bold rounded-0">
            <li class="list-group-item rounded-0 col-2">Name</li>
            <li class="list-group-item col-4">Description</li>
            <li class="list-group-item col-2">Parking</li>
            <li class="list-group-item col-2">Vote</li>
            <li class="list-group-item rounded-0 col-2">Distance</li>
        </ul>

        <?php
        // Avvio un ciclo sull'array
        foreach ($hotels as $hotel) {
            //Condizione per il parcheggio
            if ($hotel["parking"]) {
                $parking = "Yes";
            } else {
                $parking = "No";
            }
            // Stampo in pagina la card
            echo "
            <ul class='list-group list-group-horizontal rounded-0'>
                <li class='list-group-item rounded-0 col-2'>$hotel[name]</li>
                <li class='list-group-item col-4'>$hotel[description]</li>
                <li class='list-group-item col-2'>$parking</li>
                <li class='list-group-item col-2'>$hotel[vote]/5</li>
                <li class='list-group-item rounded-0 col-2'>$hotel[distance_to_center] km</li>
            </ul>
        ";
        }
        ?>
    </div>
</body>

</html>