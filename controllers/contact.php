<?php
$pageTitle = "Contact";

$db = connect();
$stm = $db->query("SELECT * FROM contact");
$result = $stm->fetchAll(PDO::FETCH_ASSOC);

$nom = $titre = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'):

        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if (!$nom || !$titre || !$message) {
            echo "Veuillez remplir les champs obligatoires.";
        }

endif;

require './views/contact.view.php';
