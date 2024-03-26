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
    <div class="header-terminal">
        <div class="logo-container-header">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/Logo-Header.png'; ?> " alt="Votre Logo">
        </div>
        <div class="infos-count-terminal">
            <div class="profil-img-terminal">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Profil.png'; ?> " alt="Votre Logo">
            </div>
            <!-- <div class="name-count">
            <h4>Martial Mertzig</h4>
            <p>Développeur WordPress Junior</p>
            </div> -->
        </div>
    </div>
</body>