<?php
if (isset($_GET['page']) && !empty(trim($_GET['page']))) {
    $page = trim($_GET['page']);
} else {
    $page = 'home';
}

switch ($page) {
    case 'devis': //1
        require 'controllers/ControllerDevis.php';
        break;
    
        case 'commande': //2
            require 'controllers/ControllerCommande.php';
            break;
        
        case 'historique': //3
            require 'controllers/ControllerHistorique.php';
            break;
                
        case 'fenetre':
            require 'controllers/ControllerFenetre.php';
            break;
    default: 
        require 'views/coponements/header.php';
        require 'views/pages/acceuil.php';
        require 'views/coponements/footer.php';
        break;
}