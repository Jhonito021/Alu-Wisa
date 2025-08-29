<?php
require_once 'config/db.php';

if (isset($_GET['id']))$id = intval($_GET['id']);
    $stmt = $pdo->prepare("DELETE FROM fenetres WHERE id = ?");
    $stmt->execute([$id]);

    // Redirection vers l'historique après suppression
    header("Location: historique.php");
    exit();

?>