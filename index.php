<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-hotel">
    <style>
        .bg-hotel{
            background-image: url(https://i.pinimg.com/736x/b1/5f/25/b15f257289f1d06d0e4dd4fc332de429.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
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

        <h1 class="text-center text-white fw-bold py-5">HOTELS IN THE CITY</h1>

        <!-- FORM -->
        <form action="index.php" method="get">
            <div class="d-flex justify-content-end align-items-center mt-3 mb-5">
                <div class="col-auto me-4">
                    <input class="rounded-5 px-3 form-control form-control-sm" type="number" name="min_vote" id="minvote" value="" placeholder="write the min rating" />
                </div>

                <input class="form-check-input" type="checkbox" id="freeparking" name="parking" value="true" />
                <label class="form-check-label text-bold text-white ps-1 pe-4" for="freeparking">Parking free</label>

                <button type="submit" class="btn btn-dark btn-sm px-3 rounded-5"><strong>Filter</strong></button>
            </div>
        </form>

       <div class="rounded-5 overflow-hidden">
        <ul class="list-group list-group-horizontal fw-bold rounded-0">
            <li class="list-group-item rounded-0 col-2 ps-4">Name</li>
            <li class="list-group-item col-4">Description</li>
            <li class="list-group-item col-2">Parking</li>
            <li class="list-group-item col-2">Vote</li>
            <li class="list-group-item rounded-0 col-2">Distance</li>
        </ul>

        <?php
        // Salvataggio dei parametri query url in variabili
        $parkingfree = $_GET["parking"] ?? "";
        $min_vote = $_GET["min_vote"] ?? "";
        // Avvio un ciclo sull'array
        foreach ($hotels as $hotel) {
            $showElement = true;

            // Condizione per verificare se l'hotel abbia un parcheggio
            if ($parkingfree && $hotel["parking"] === false) {
                $showElement = false;
            }

            // Condizione per verificare se l'hotel abbia un voto minimo di stelle 
            if ($min_vote && $hotel["vote"] < $min_vote) {
                $showElement = false;
            }

            //Condizione per il testo del campo parking
            if ($hotel["parking"]) {
                $parking = "Yes";
            } else {
                $parking = "No";
            }
            // Stampo in pagina la card se le condizioni sono rispettate sennò no
            if ($showElement) {
                echo "
            <ul class='list-group list-group-horizontal rounded-0'>
                <li class='list-group-item rounded-0 col-2 ps-4'>$hotel[name]</li>
                <li class='list-group-item col-4'>$hotel[description]</li>
                <li class='list-group-item col-2'>$parking</li>
                <li class='list-group-item col-2'>$hotel[vote]/5</li>
                <li class='list-group-item rounded-0 col-2'>$hotel[distance_to_center] km</li>
            </ul>
            ";
            }
        }
        ?>
       </div>
        
    </div>
</body>

</html>