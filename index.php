<!DOCTYPE html>
<html lang="fr">

<style> <?php include ('style.css'); ?> </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
<div class="logo-container">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Logo-02-02-02-02-02.png'; ?> " alt="Votre Logo">
    </div>
    <div class="dashboard" id="sortable-container">
    <div class="dashboard-item site-title">

    <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Titre du Site</h2>
    </div>
            
            <p class="site-description">Hello world !</p>
        </div>
        <div class="dashboard-item portfolio">

            <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Portfolio</h2>
            </div>
            <div class="project">
                <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Booki - Hébergement saisonnier</h3>
                    <p>Description du projet 12.</p>
                    <a href="<?php echo get_theme_file_uri() . '/booki.php'; ?> ">En savoir plus</a>
                </div>
            </div>

            <div class="project">
              <!--  <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
                <div>
                    <h3>MotaPhoto - Photographe Freelance</h3>
                    <p>Description du projet 2.</p>
                    <a href="<?php echo get_theme_file_uri() . '/curriculumvitae.php'; ?> ">En savoir plus</a>
                </div>
            </div>

            <div class="project">
               <!-- <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Koukaki - Studio d'animation</h3>
                    <p>Description du projet 2.</p>
                    <a href="<?php echo get_theme_file_uri() . '/curriculumvitae.php'; ?> ">En savoir plus</a>
                </div>
            </div>
            
            <!-- Ajoutez d'autres projets ici -->
        </div>

        <div class="dashboard-item skills">
            <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Compétences</h2>
    </div>
            <div class="animated-schema" id="skills-schema">
                <!-- Cartes de compétences seront ajoutées par JavaScript -->
            </div>
        </div>

        <div class="dashboard-item portfolio">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Expériences</h2>
    </div>
            <div class="project">
                <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Projet 1</h3>
                    <p>Description du projet 12.</p>
                    <a href="<?php echo get_theme_file_uri() . '/koukaki.php'; ?> ">Détails</a>
                </div>
            </div>

            <div class="project">
              <!--  <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Projet 2</h3>
                    <p>Description du projet 2.</p>
                    <a href="<?php echo get_theme_file_uri() . '/curriculumvitae.php'; ?> ">Détails</a>
                </div>
            </div>

            <div class="project">
               <!-- <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Projet 3</h3>
                    <p>Description du projet 2.</p>
                    <a href="<?php echo get_theme_file_uri() . '/curriculumvitae.php'; ?> ">Détails</a>
                </div>
            </div>
            
            <!-- Ajoutez d'autres projets ici -->
        </div>

        <div class="dashboard-item portfolio">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Cursus</h2>
    </div>
            <div class="project">
                <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Projet 1</h3>
                    <p>Description du projet 12.</p>
                    <a href="<?php echo get_theme_file_uri() . '/koukaki.php'; ?> ">Détails</a>
                </div>
            </div>

            <div class="project">
              <!--  <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Projet 2</h3>
                    <p>Description du projet 2.</p>
                    <a href="<?php echo get_theme_file_uri() . '/curriculumvitae.php'; ?> ">Détails</a>
                </div>
            </div>

            <div class="project">
               <!-- <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Projet 3</h3>
                    <p>Description du projet 2.</p>
                    <a href="<?php echo get_theme_file_uri() . '/curriculumvitae.php'; ?> ">Détails</a>
                </div>
            </div>
            
            <!-- Ajoutez d'autres projets ici -->
        </div>

        <div class="dashboard-item about">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>A propos</h2>
    </div>
            <p> à propos</p>
        </div>

        <div class="dashboard-item contact-form">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Contact et réseaux</h2>
    </div>
            <form action="#" method="post">
            <p>Email: m.mertzig@welinkton.fr</p>
            <p>Téléphone: (+33) 6.56.74.16.40</p>
            <p>Adresse: Inconnue</p>
            </form>
        </div>

        <div class="dashboard-item contact-form">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Centres d'interets</h2>
    </div>
            <form action="#" method="post">
            <p>Email: m.mertzig@welinkton.fr</p>
            <p>Téléphone: (+33) 6.56.74.16.40</p>
            <p>Adresse: Inconnue</p>
            </form>
        </div>

        <div class="dashboard-item faq">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Foire au questions</h2>
    </div>
            <div class="faq-item" id="question1">
                <h3>Quels sont les différents types de sites web ?</h3>
                <div class="answer">
                    <p>Réponse à la question 1.</p>
                </div>
            </div>
            <div class="faq-item" id="question2">
                <h3>Qu'est-ce qu'une charte graphique ?</h3>
                <div class="answer">
                    <p>Réponse à la question 2.</p>
                </div>
            </div>
            <div class="faq-item" id="question2">
                <h3>Qu'est-ce que le responsive ?</h3>
                <div class="answer">
                    <p>Réponse à la question 2.</p>
                </div>
            </div>
            <!-- Ajoutez d'autres questions et réponses ici -->
        </div>

        
    </div>

    <footer>
        <p>© 2024 Martial Mertzig tous droits réservés.</p>
    </footer>

    
</body>

</html>
