<?php
// Importo i file PHP di cui ho bisogno 
require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/db_movies.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>LISTA DEI FILM PRESENTI IN LIBRERIA</h1>

        <div class="row">
            <?php foreach ($db_movies as $movie): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($movie->title); ?></h5>
                            <p class="card-text">Genere: <?php echo htmlspecialchars($movie->genre); ?></p>
                            <p class="card-text">Durata: <?php echo htmlspecialchars($movie->duration); ?></p>
                            <p class="card-text">Lingua: <?php echo htmlspecialchars($movie->language); ?></p>
                            <p class="card-text">Anno: <?php echo htmlspecialchars($movie->year); ?></p>
                            <p class="card-text">Regista: <?php echo htmlspecialchars($movie->director); ?></p>
                            <p class="card-text">Casa di Produzione: <?php echo htmlspecialchars($movie->production_house); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
