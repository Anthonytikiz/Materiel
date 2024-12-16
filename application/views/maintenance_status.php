<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status de Maintenance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Statut de Maintenance</h1>
        
        <?php if (isset($status['error'])): ?>
            <div class="alert alert-danger">
                <strong>Erreur :</strong> <?= $status['error']; ?>
                <br>Status Code: <?= $status['status_code']; ?>
            </div>
        <?php else: ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">UUID : <?= $status['uuid'] ?? 'Inconnu'; ?></h5>
                    <p class="card-text">Status : <?= $status['status'] ?? 'Aucun status disponible'; ?></p>
                    <p class="card-text">Message : <?= $status['message'] ?? 'Aucun message'; ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
