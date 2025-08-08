<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alu WISA</title>
    <link rel="stylesheet" href="public/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap-4.0.0-dist/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <nav class="nav-bar">
        <div class="nav-container">
            <div class="logo-nav">
                <a href="index.php">DevisTrack</a>
            </div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php?page=acceuil" class="nav-link"><i class="fas fa-home"></i> Acceuil</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=devis" class="nav-link"><i class="fas fa-file-invoice"></i> Devis</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=commande" class="nav-link"><i class="fas fa-shopping-cart"></i> Commande</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=historique" class="nav-link"><i class="fas fa-history"></i> Historique</a>
                </li>
            </ul>

            <div class="horloge">
                <div id="dateTime">
                    <div id="heure"><span id="h">--</span><span class="blink-colon">:</span><span id="m">--</span><span class="blink-colon">:</span><span id="s">--</span></div>
                        <div id="date">Chargement...</div>
                    </div>
                </div>
            </div>
    </nav>
