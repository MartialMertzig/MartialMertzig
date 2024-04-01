<!DOCTYPE html>
<html lang="fr">
<!-- Importe le style.css et le Header.php -->
<style> <?php include ('style.css'); ?> </style>
<?php include ('header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <!-- Section Profil -->
    <div class="dashboard-hello">
        <div class="categorie-date-heure">
            <P>| Portfolio</P>
            <?php date_default_timezone_set('Europe/Paris'); // Définir le fuseau horaire sur Paris ?>
            <P><?php echo date('l j F Y | H:i'); ?></P>
        </div>
        <div class="welcome">
            <h1>Bonjour, ravi de vous revoir.</h1>
            <div class="bouton-cv">
                <p>martialmertzig@outlook.com</p>
                <p>(+33) 6 56 74 16 40</p>
                <a href="<?php echo get_theme_file_uri() . '/assets/images/Curriculum Vitæ - Martial Mertzig.pdf'; ?> " target="_blank"> <input type="button" class="bouton" value="Télécharger mon CV"> </a>
            </div>
        </div>
    </div>
    <!--Secftion du Dashboard -->
    <div class="dashboard" id="sortable-container">
    <div class="dashboard-item site-title">

            <div class="titre-du-site">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Historique.png'; ?> " alt="Votre Logo">
                <h2>Historique</h2>
            </div>
                    
                    <p class="site-description"> Bonjour et bienvenue sur mon tableau de bord !<br><br>
                    Naviguer à travers mes informations, mes projets, mes compétences… Et découvrez mon profil atypique de Développeur Wordpress Junior !<br><br>
                    Ayant terminé depuis peu une formation de en tant que développeur WordPres, je suis ouvert au marché et à votre écoute pour 
                    une éventuelle collaboration. Explorer mon site et n’hésitez pas à me faire signe si vous souhaitez prendre contact.
                    </p>
                </div>
                <div class="dashboard-item portfolio">

                    <div class="titre-du-site">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Projet.png'; ?> " alt="Votre Logo">
                <h2>Projets</h2>
                    </div>

                    <div class="project">

                    <div class="project-description">
            <!-- Création d'une loop pour afficher toutes les photos -->
            <?php
        $args = array(
            'post_type' => 'projets',
            'posts_per_page' => 10,
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
        <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Competences.png'; ?> " alt="Votre Logo">
        <h2>Compétences</h2>
    </div>
            <div class="animated-schema" id="skills-schema">
                <!-- Cartes de compétences seront ajoutées par JavaScript -->
            </div>
        </div>

        <div class="dashboard-item portfolio">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Icon-Experiences.png'; ?> " alt="Votre Logo">
        <h2>Expériences</h2>
    </div>
            <div class="experience">
                <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Graphiste Maquettiste - BNP Paribas</h3>
                    <p>sept. 2022 - nov. 2022 · 3 mois - Paris, Île-de-France</p>
                </div>
            </div>

            <div class="experience">
              <!--  <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
              <div>
                    <h3>Graphiste multimédia - Groupe Quintésens</h3>
                    <p>oct. 2020 - sept. 2021 · 1 an - Paris, Île-de-France</p>
                </div>
            </div>

            <div class="experience">
               <!-- <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
               <div>
                    <h3>Graphiste Maquettiste  - Zariel</h3>
                    <p>nov. 2019 - juil. 2020 · 9 mois - Paris, Île-de-France</p>
                </div>
            </div>

            <div class="experience">
               <!-- <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
               <div>
                    <h3>Graphiste multimédia - Planet 7</h3>
                    <p>sept. 2018 - juil. 2019 · 11 mois - Paris, Île-de-France</p>
                </div>
            </div>

            <div class="experience">
               <!-- <img src="projet2.jpg" alt="Projet 2 Image">  Ajout de l'image ici -->
               <div>
                    <h3>Graphiste multimédia - Digiplace</h3>
                    <p>sept. 2017 - sept. 2018 · 1 an 1 mois - Saint-Mandé, Île-de-France</p>
                </div>
            </div>
            
            <!-- Ajoutez d'autres projets ici -->
        </div>

        <div class="dashboard-item portfolio">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Formations.png'; ?> " alt="Votre Logo">
        <h2>Formations</h2>
    </div>

    <div class="formations">
                <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Formation de Développeur WordPress (Bac +2)</h3>
                    <p>Juin 2023 à Mars 2024 - OpenClassrooms</p>
                </div>
            </div>

            <div class="formations">
                <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
                <div>
                    <h3>Licence Designer-e Graphique éco-responsable Print</h3>
                    <p>2020 à 2021 - Campus Fonderie de l’Image, Bagnolet (93170)</p>
                </div>
            </div>

            <div class="formations">
              <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
              <div>
                    <h3>BTS Design Graphique communication et médias numériques</h3>
                    <p>2018 à 2020 - Campus Fonderie de l’Image, Bagnolet (93170)</p>
                </div>
            </div>

            <div class="formations">
               <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
              <div>
                    <h3>Titre RNCP Maquettiste Infographiste Multimédia</h3>
                    <p>2017 à 2018 - Campus Fonderie de l’Image, Bagnolet (93170)</p>
                </div>
            </div>

            <div class="formations">
               <!-- <img src="projet1.jpg" alt="Projet 1 Image">  Ajout de l'image ici -->
              <div>
                    <h3>Passerelle longue vers l’apprentissage</h3>
                    <p>Fév à Juil. 2017 - Campus Fonderie de l’Image, Bagnolet (93170)</p>
                </div>
            </div>
            
            <!-- Ajoutez d'autres projets ici -->
        </div>

        <div class="dashboard-item about">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-a-propos.png'; ?> " alt="Votre Logo">
        <h2>A propos</h2>
    </div>
            <p>Pendant ma formation de développeur WordPress chez OpenClassrooms, j’ai acquis des compétences en CSS, PHP et JavaScript, 
                essentielles pour personnaliser des sites WordPress. J’ai également appris les bases du référencement (SEO) pour améliorer 
                la visibilité des sites web sur les moteurs de recherche. Cette formation a été une expérience enrichissante, me permettant 
                de devenir un développeur WordPress compétent et polyvalent.</p>
        </div>

        <div class="dashboard-item contact-form">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-contact.png'; ?> " alt="Votre Logo">
        <h2>Contact</h2>
    </div>
    <div class="infos-contact">
            <p>Email : <b>martialmertzig@outlook.com</b></p>
            <p>Téléphone : <b>(+33) 6 56 74 16 40</b></p>
            <p>Gif-sur-Yvette (91190)</p>
        </form>
    </div>
        </div>

        <div class="dashboard-item contact-form">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-centre-interet.png'; ?> " alt="Votre Logo">
        <h2>Centres d'interets</h2>
    </div>
            <div class="centres">
            <p>Voyage : Brésil et Portugal</p>
            <p>Cinéma : Science-Fiction</p>
            <p>Musique : New Wave</p>
    </div>
        </div>

        <div class="dashboard-item faq">
        <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-faq.png'; ?> " alt="Votre Logo">
        <h2>Foire aux questions</h2>
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
    <?php include ('footer.php'); ?>
</body>
</html>
