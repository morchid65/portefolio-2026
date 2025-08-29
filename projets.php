<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes Projets</title>
    <style>
        body {
            background: linear-gradient(to right, #0f0f0f, #1a1a1a);
            color: #00ffcc;
            font-family: 'Courier New', monospace;
            padding: 40px;
        }
        h1 {
            text-align: center;
            font-size: 3em;
            margin-bottom: 40px;
            text-shadow: 0 0 10px #00ffcc;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .card {
            background: #222;
            border: 1px solid #00ffcc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 15px #00ffcc44;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.03);
        }
        .card img {
            max-width: 100%;
            border-radius: 6px;
            margin-bottom: 15px;
        }
        .etat {
            font-weight: bold;
            color: #ff00aa;
        }
        a {
            color: #00ffff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h1>🚀 Mes Projets</h1>

<div class="grid">
<?php
$stmt = $pdo->query("SELECT * FROM projects ORDER BY data_creation DESC");
while ($row = $stmt->fetch()) {
    echo "<div class='card'>";
    if ($row['image']) {
        echo "<img src='{$row['image']}' alt='Image du projet'>";
    }
    echo "<h2>{$row['titre']}</h2>";
    echo "<p>{$row['description']}</p>";
    echo "<p><strong>Technos :</strong> {$row['technos']}</p>";
    echo "<p><strong>Lien :</strong> <a href='{$row['lien']}' target='_blank'>Voir le projet</a></p>";
    echo "<p class='etat'>📌 {$row['etat']}</p>";
    echo "<p><small>🕒 Ajouté le : {$row['data_creation']}</small></p>";
    echo "</div>";
}
?>
</div>

</body>
</html>
