<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un projet</title>
    <style>
        body { font-family: Arial; background: #1a1a1a; color: #eee; padding: 40px; }
        form { max-width: 600px; margin: auto; background: #2a2a2a; padding: 20px; border-radius: 8px; }
        input, textarea, select { width: 100%; margin-bottom: 15px; padding: 10px; border: none; border-radius: 4px; }
        input[type="submit"] { background: #00ff99; color: #000; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>

<h2>🛠 Ajouter un projet</h2>

<form method="POST">
    <input type="text" name="titre" placeholder="Titre du projet" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="text" name="image" placeholder="URL de l’image">
    <input type="text" name="technos" placeholder="Technologies utilisées">
    <input type="text" name="lien" placeholder="Lien vers le projet">
    <select name="etat">
        <option value="en cours">En cours</option>
        <option value="terminé">Terminé</option>
    </select>
    <input type="submit" name="submit" value="Ajouter">
</form>

<?php
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO projects (titre, description, image, technos, lien, etat) 
            VALUES (:titre, :description, :image, :technos, :lien, :etat)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':titre' => $_POST['titre'],
        ':description' => $_POST['description'],
        ':image' => $_POST['image'],
        ':technos' => $_POST['technos'],
        ':lien' => $_POST['lien'],
        ':etat' => $_POST['etat']
    ]);
    echo "<p>✅ Projet ajouté avec succès !</p>";
}
?>

</body>
</html>
