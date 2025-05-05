<?php
// index.php
include 'includes/header.php';

// Récupère le paramètre 'tp' de l'URL
$tp = isset($_GET['tp']) ? $_GET['tp'] : 'home';

// Charge le contenu en fonction du paramètre
$content = '';
switch ($tp) {
    case 'tp1':
        $content = '<h2>TP 1 Contenu</h2><p>Contenu du TP 1...</p>';
        break;
    case 'tp2':
        $content = '<h2>TP 2 Contenu</h2><p>Contenu du TP 2...</p>';
        break;
    case 'tp3':
        $content = '<h2>TP 3 Contenu</h2><p>Contenu du TP 3...</p>';
        break;
    case 'tp4':
        $content = '<h2>TP 4 Contenu</h2><p>Contenu du TP 4...</p>';
        break;
    default:
        $content = '<h1>Corps de la page</h1><p>Bienvenue sur la page principale...</p>';
}
?>

<main>
    <?php echo $content; ?>
</main>

<?php include 'includes/footer.php'; ?>
