<!DOCTYPE html>
<html lang="fr">

<style> <?php include ('style.css'); ?> </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="logo-container">
        <img src="votre-logo.png" alt="Votre Logo">
    </div>
    <div class="dashboard" id="sortable-container">
        <div class="dashboard-item portfolio">
            <h2>Portfolio</h2>
            <div class="project">
                <img src="projet1.jpg" alt="Projet 1 Image"> <!-- Ajout de l'image ici -->
                <div>
                    <h3>Projet 1</h3>
                    <p>Description du projet 12.</p>
                    <a href="<?php echo get_theme_file_uri() . '/koukaki.php'; ?> ">Détails</a>
                </div>
            </div>

            <div class="project">
                <img src="projet2.jpg" alt="Projet 2 Image"> <!-- Ajout de l'image ici -->
                <div>
                    <h3>Projet 2</h3>
                    <p>Description du projet 2.</p>
                    <a href="<?php echo get_theme_file_uri() . '/koukaki.php'; ?> ">Détails</a>
                </div>
            </div>
            <!-- Ajoutez d'autres projets ici -->
        </div>

        <div class="dashboard-item skills">
            <h2>Compétences</h2>
            <div class="animated-schema" id="skills-schema">
                <!-- Cartes de compétences seront ajoutées par JavaScript -->
            </div>
        </div>

        <div class="dashboard-item contact-form">
            <h2>Contact</h2>
            <form action="#" method="post">
                <!-- Ajoutez ici votre formulaire de contact -->
            </form>
        </div>

        <div class="dashboard-item about">
            <h2>À Propos</h2>
            <p> à propos</p>
        </div>

        <div class="dashboard-item faq">
            <h2>Foire aux Questions</h2>
            <div class="faq-item" id="question1">
                <h3>Question 1</h3>
                <div class="answer">
                    <p>Réponse à la question 1.</p>
                </div>
            </div>
            <div class="faq-item" id="question2">
                <h3>Question 2</h3>
                <div class="answer">
                    <p>Réponse à la question 2.</p>
                </div>
            </div>
            <!-- Ajoutez d'autres questions et réponses ici -->
        </div>

        <div class="dashboard-item site-title">
            <h2>Titre du Site</h2>
            <p>description du site.</p>
        </div>
    </div>

    <footer>
        <p>Merci de visiter mon portfolio. N'hésitez pas à me contacter pour toute question.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
