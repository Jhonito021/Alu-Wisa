<?php
if (isset($_GET['page']) && !empty(trim($_GET['page']))) {
    $page = trim($_GET['page']);
} else {
    $page = 'home';
}

switch ($page) {
    case 'acceuil': //1
        require 'views/pages/acceuil.php';
        break;
    
    default: 
        require 'views/coponements/header.php';
        require 'views/pages/acceuil.php';
        require 'views/coponements/footer.php';
        break;
}