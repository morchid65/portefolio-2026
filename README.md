<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Portfolio de Jebril</title>
  <style>
    body {
      margin: 0;
      background-color: #0f0f0f;
      color: #00ffcc;
      font-family: 'Courier New', monospace;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }

    .banniere {
      text-align: center;
      padding: 40px;
      animation: pulse 4s infinite;
    }

    .banniere img {
      width: 100%;
      max-width: 800px;
      border-radius: 10px;
      box-shadow: 0 0 20px #00ffcc55;
      margin-bottom: 20px;
    }

    #titre {
      font-size: 2.5em;
      margin-bottom: 20px;
      letter-spacing: 2px;
      color: #00ffcc;
    }

    .icones {
      display: flex;
      justify-content: center;
      gap: 30px;
    }

    .icon {
      font-size: 2em;
      animation: blink 1.5s infinite;
    }

    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.3; }
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.02); }
      100% { transform: scale(1); }
    }
  </style>
</head>
<body>

  <div class="banniere">
    <!-- Ton image GIF animée -->
    <img src="portefolio-2026.gif" alt="Portfolio de Jebril">

    <!-- Texte animé -->
    <h1 id="titre"></h1>

    <!-- Icônes tech -->
    <div class="icones">
      <span class="icon">&lt;/&gt;</span>
      <span class="icon">&#128187;</span>
      <span class="icon">&#9881;</span>
    </div>
  </div>

  <script>
    const text = "Portfolio de Jebril";
    let i = 0;
    function typeWriter() {
      if (i < text.length) {
        document.getElementById("titre").innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, 100);
      }
    }
    window.onload = typeWriter;
  </script>

</body>
</html>


---

# 📁 Portfolio de Jebril

Bienvenue dans mon portfolio personnel, développé en PHP, HTML, CSS et MySQL. Ce projet regroupe mes créations web, mes outils, mes expérimentations et mes projets d’apprentissage. Il est entièrement dynamique et administrable via une interface d’ajout de projets.

---

## 🧰 Fonctionnalités

- **Ajout de projets** via un formulaire sécurisé (PDO + POST)
- **Base de données MySQL** pour stocker les projets
- **Affichage dynamique** des projets avec grille responsive
- **Navigation latérale** pour explorer les sections du portfolio
- **Design personnalisé** avec CSS sombre et effets visuels
- **Organisation par sections** : compétences, formations, expériences, soft skills, centres d’intérêt…

---

## 🧪 Projets intégrés

Voici quelques projets déjà intégrés dans le portfolio :

| Projet              | Description                                      | Lien local                          |
|---------------------|--------------------------------------------------|-------------------------------------|
| 🎨 Portfolio         | Interface principale du site                     | `http://localhost/portfolio/`       |
| 🧬 Jeu de la Vie     | Simulation cellulaire en PHP                     | `http://localhost/Foitih-Jebril-jeu-de-la-vie/` |
| 📋 Task Manager      | Gestionnaire de tâches                          | `http://localhost/task_manager/`    |
| 🧠 Kaguya            | Projet expérimental (à détailler)                | `http://localhost/kaguya/`          |
| 🧾 CV interactif     | Page de présentation personnelle                 | `http://localhost/Projet-CV/`       |
| 🐾 Pokedex           | Catalogue Pokémon en PHP                         | `http://localhost/pokedex.local/`   |

---

## 🛠 Technologies utilisées

- **Frontend** : HTML5, CSS3, JavaScript (optionnel)
- **Backend** : PHP orienté objet
- **Base de données** : MySQL via PDO
- **Sécurité** : Préparation des requêtes SQL (anti-injection)
- **Design** : Flexbox, Grid, effets CSS, dark mode

---

## 📦 Structure du projet

```
/portfolio/
│
├── db.php               → Connexion à la base de données
├── ajouter_projet.php   → Formulaire d’ajout de projet
├── afficher_projets.php → Grille des projets
├── index.php            → Page d’accueil
├── style.css            → Feuille de style principale
├── /projets/            → Dossiers des projets individuels
└── /assets/             → Images et ressources
```

---

## 🚀 Installation locale

1. Cloner le projet dans `htdocs` ou `www`
2. Créer une base de données `portfolio`
3. Importer la table `projects` :

```sql
CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(255),
  description TEXT,
  image VARCHAR(255),
  technos VARCHAR(255),
  lien VARCHAR(255),
  etat VARCHAR(50),
  date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

4. Modifier les identifiants dans `db.php` si nécessaire
5. Lancer `http://localhost/portfolio/` dans le navigateur

---

## ✨ À venir

- Ajout d’un système de tags par technologie
- Filtrage des projets par état ou catégorie
- Interface d’édition/suppression des projets
- Version mobile responsive

---

Tu veux que je t’aide à générer une bannière SVG pour ton portfolio, ou à rédiger une version anglaise du README pour GitHub international ? Je peux te booster ça en mode vitrine pro 🌍🔥
