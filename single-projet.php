<?php

get_header();

while (have_posts()) : the_post();

    // Récupération des champs ACF
    $project_title = get_the_title();
    $project_description = get_field('description');
    $project_integration_images = get_field('images_du_projet');
    $project_type = get_field('type_de_projet');
    $project_archives_links = get_field('liens_archives_projet');
    $project_contact_email = get_field('email_contact');
    $project_contact_phone = get_field('telephone_contact');
    $project_contact_address = get_field('adresse_contact');
    ?>

    <!DOCTYPE html>
    <html lang="fr">

    <style>
        <?php include('style.css'); ?>
    </style>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo esc_html($project_title); ?></title>
        <link rel="stylesheet" href="css/theme.css">
    </head>

    <body>

    <?php
        date_default_timezone_set('Europe/Paris'); // Définir le fuseau horaire sur Paris
        ?>
        <div class="date-heure">
            <h1><?php echo date('l j F Y | H:i | \P\l\a\n\è\t\e\ \T\e\r\r\e'); ?></h1>
        </div>

        <div class="project-page">

            <div class="project-details">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2><?php echo esc_html($project_title); ?></h2>
                </div>
                <p><?php echo esc_html($project_description); ?></p>
            </div>

            <div class="project-screenshots">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2>Intégration</h2>
                </div>

                <div class="screenshot img">
                <?php
                    $project_integration_images = get_field('images_du_projet');

                    if ($project_integration_images) {
                        // Récupérer l'URL, l'ID et les autres informations de l'image
                        $image_info = wp_get_attachment_image_src($project_integration_images, 'full');

                        if ($image_info) {
                            $image_url = $image_info[0];
                            $image_alt = get_post_meta($project_integration_images, '_wp_attachment_image_alt', true);

                            // Afficher l'image avec l'ID
                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" data-image-id="' . esc_attr($project_integration_images) . '">';
                        } else {
                            echo 'Erreur lors de la récupération des informations de l\'image.';
                        }
                    } else {
                        echo 'Aucune image à afficher.';
                    }
                    ?>
                </div>
                
            </div>

            <div class="project-tech">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2>Type</h2>
                </div>
                <div class="Logo-outils">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                </div>
            </div>

            <div class="project-links">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2>Archives</h2>
                </div>
                <a href="https://github.com/">Lien vers le projet</a>
                <a href="https://github.com/">Lien vers le code source</a>
            </div>

            <div class="dashboard-item contact-form">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2>Réseau galactique</h2>
                </div>
                <form action="#" method="post">
                    <p>Email: martialmertzig@outlook.com</p>
                    <p>Téléphone: (+33) 6 56 74 16 40</p>
                    <p>Adresse: Inconnue</p>
                </form>
            </div>

            <div class="back-to-dashboard">
                <a href="<?php echo esc_url(home_url('/')); ?>">Retour au Tableau de Bord</a>
            </div>
        </div>

    </body>

    </html>

<?php endwhile;

get_footer();
?>