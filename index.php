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
    var_dump($hotels)

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1>
                hotel
            </h1>
        </header>
        <main>
            <ul>
                <?php
                    foreach ($hotels as $hotel) {
                        echo '<li>' .$hotel['name']. ' - '.$hotel['description']. ' - ' .$hotel['parking']. ' - ' .$hotel['vote']. ' - ' .$hotel['distance_to_center'] .'</li>';
                    }
                ?>
            </ul>
            <div class="container">
                <div class='d-flex flex-wrap justify-content-center'>
                    <h3 class="mt-4">Hotel Disponibili</h3>
                    <table class='table text-capitalize'>
                        <thead>
                            <tr>
                                <th class='col'>name</th>
                                <th class='col'>description</th>
                                <th class='col'>parking</th>
                                <th class='col'>vote</th>
                                <th class='col'>distance of center</th>
                            </tr>
                        </thead>
                            <?php foreach($hotels as $hotel) { 
                                $park=$hotel['parking'] ? 'si':'no';
                            ?>
                        <tr>
                            <td><?php echo $hotel['name']; ?></td>
                            <td><?php echo $hotel['description']; ?></td>
                            <td><?php echo $park; ?></td>
                            <td><?php echo $hotel['vote']; ?></td>
                            <td><?php echo $hotel['distance_to_center']; ?></td>
                        </tr>
                            <?php
                            }
                            ?>
                    </table>
                </div>
            </div>        
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>       
    </body>
</html>