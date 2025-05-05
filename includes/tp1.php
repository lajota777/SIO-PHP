<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #0056b3;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            display: inline-block;
        }
        nav a:hover {
            background-color: #575757;
        }
        section {
            margin-bottom: 30px;
            padding: 15px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        code {
            background: #eef;
            padding: 2px 4px;
            border-radius: 3px;
            font-size: 90%;
        }
        hr {
            border: none;
            height: 1px;
            background: #ddd;
        }
    </style>
</head>
<body>
    <nav>
        <a href="../../main.html">Menu</a>
        <a href="../tp1/tp1.html">TP1</a>
        <a href="../tp3/tp3.html">TP3</a>
        <a href="../tp4/tp4.html">TP4</a>
        <a href="../tp5/tp5.html">TP5</a>
        <a href="../tp6/tp6.html">TP6</a>
        <a href="../tp7/tp7.html">TP7</a>
    </nav>
    <h1>TP1</h1>

    <section>
        <h2># Base</h2>
        <p><code>&lt;html&gt;</code> structure principale d'une page web</p>
        <p><code>&lt;head&gt;</code> contient les métadonnées des liens vers les styles/script</p>
        <p><code>&lt;title&gt;</code> définit le titre dans l'onglet du navigateur</p>
        <p><code>&lt;body&gt;</code> contient le contenu visible du site</p>
    </section>

    <section>
        <h2># Texte</h2>
        <p><code>&lt;h1&gt;</code> à <code>&lt;h6&gt;</code>: titre le plus important</p>
        <p><code>&lt;p&gt;</code>: paragraphe</p>
        <p><code>&lt;br&gt;</code>: retour à la ligne</p>
        <p><code>&lt;hr&gt;</code>: ligne horizontale</p>
        <p><code>&lt;strong&gt;</code>: texte en gras</p>
        <p><code>&lt;em&gt;</code>: texte en italique</p>
        <p><code>&lt;span&gt;</code>: conteneur</p>
    </section>

    <section>
        <h2># Liens / Médias</h2>
        <p><code>&lt;a&gt;</code>: lien hypertexte</p>
        <p><code>&lt;img&gt;</code>: image</p>
        <p><code>&lt;video&gt;</code>: vidéo</p>
        <p><code>&lt;audio&gt;</code>: audio</p>
        <p><code>&lt;source&gt;</code>: source pour vidéo/audio</p>
        <p><code>&lt;iframe&gt;</code>: intégration de contenu externe</p>
    </section>

    <section>
        <h2># Liste</h2>
        <p><code>&lt;ul&gt;</code>: liste non ordonnée</p>
        <p><code>&lt;ol&gt;</code>: liste ordonnée</p>
        <p><code>&lt;li&gt;</code>: élément de liste</p>
    </section>

    <section>
        <h2># Tableaux</h2>
        <p><code>&lt;table&gt;</code>: tableau</p>
        <p><code>&lt;tr&gt;</code>: ligne de tableau</p>
        <p><code>&lt;th&gt;</code>: cellule d'en-tête</p>
        <p><code>&lt;td&gt;</code>: cellule standard</p>
    </section>
</body>
</html>