<?php
// index.php
include 'includes/header.php';

// Récupère le paramètre 'tp' de l'URL
$tp = isset($_GET['tp']) ? $_GET['tp'] : 'home';

// Détermine le fichier à inclure en fonction du paramètre
$fileToInclude = 'includes/' . $tp . '.php';

// Vérifie si le fichier existe pour éviter les erreurs
if (file_exists($fileToInclude)) {
    include $fileToInclude;
} else {
    echo '<h1>Contenu par défaut</h1><p>Bienvenue sur la page principale...</p>';
}
?>

<main>
    <!-- Le contenu sera inclus ici -->
</main>

<?php include 'includes/footer.php'; ?>
