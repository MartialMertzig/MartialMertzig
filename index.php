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
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Logo.png'; ?> " alt="Votre Logo">
    </div>
    <div class="date-heure">
    <h1>Mardi 12 mars 2024 | 14:35 | Planète Terre_</h1>
    </div>
    <div class="dashboard" id="sortable-container">
    <div class="dashboard-item site-title">

    <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Historique</h2>
    </div>
            
            <p class="site-description"> Pendant ma formation de développeur WordPress chez OpenClassrooms, j’ai acquis des compétences en CSS, PHP et JavaScript, 
                essentielles pour personnaliser des sites WordPress. J’ai également appris les bases du référencement (SEO) pour améliorer la visibilité des sites 
                web sur les moteurs de recherche. Cette formation a été une expérience enrichissante, me permettant de devenir un développeur WordPress compétent 
                et polyvalent.</p>
        </div>
        <div class="dashboard-item portfolio">

            <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Collecte</h2>
            </div>

            <div class="project">

            <div class="project-description">
    <!-- Création d'une loop pour afficher toutes les photos -->
    <?php
$args = array(
    'post_type' => 'projets',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'ASC',
    'paged' => 1,
);

$projet_query = new WP_Query($args);

if ($projet_query->have_posts()) {
    while ($projet_query->have_posts()) {
        $projet_query->the_post();

        // Récupération des champs ACF
        $project_title = get_the_title();
        $project_description = get_field('description_du_projet');
        $project_image = get_field('image_du_projet');
        $project_links = get_field('liens_du_projet');

        // Structure du projet avec lien vers le template part
        echo '<a href="' . esc_url(get_permalink()) . '">';
        echo '<div class="project">';
        if ($project_image) {
            echo '<img src="' . esc_url($project_image['url']) . '" alt="' . esc_attr($project_image['alt']) . '">';
        }
        echo '<div>';
        echo '<h3>' . esc_html($project_title) . '</h3>';
        echo '<p>' . esc_html($project_description) . '</p>';

        if ($project_links) {
            echo '<div class="project-links"><h4>Liens</h4>';
            foreach ($project_links as $link) {
                echo '<a href="' . esc_url($link['lien']) . '">' . esc_html($link['label']) . '</a>';
            }
            echo '</div>';
        }

        echo '</div></div>';
        echo '</a>';
    }
    wp_reset_postdata();
} else {
    echo 'Aucune photo trouvée.';
}
?>


</div>
</div>

</div>


        <div class="dashboard-item skills">
            <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Données</h2>
    </div>
            <div class="animated-schema" id="skills-schema">
                <!-- Cartes de compétences seront ajoutées par JavaScript -->
            </div>
        </div>

        <div class="dashboard-item portfolio">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Déstination</h2>
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
        <h2>Formations</h2>
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
        <h2>Informations</h2>
    </div>
            <p>Pendant ma formation de développeur WordPress chez OpenClassrooms, j’ai acquis des compétences en CSS, PHP et JavaScript, 
                essentielles pour personnaliser des sites WordPress. J’ai également appris les bases du référencement (SEO) pour améliorer 
                la visibilité des sites web sur les moteurs de recherche. Cette formation a été une expérience enrichissante, me permettant 
                de devenir un développeur WordPress compétent et polyvalent.</p>
        </div>

        <div class="dashboard-item contact-form">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Réseau galactique</h2>
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
            <p>La musique</p>
            <p>Les jeux-vidéos</p>
            <p>La Science-Fiction</p>
            <p>...</p>
            </form>
        </div>

        <div class="dashboard-item faq">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Lo-04.png'; ?> " alt="Votre Logo">
        <h2>Questions de l'équipage</h2>
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
