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
	
    <div class="terminal">
    <div class="logo-container">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Martial Mertzig - Portfolio - Logo_Plan de travail 1_Plan de travail 1_Plan de travail 1.png'; ?> " alt="Votre Logo">
    </div>
        <div class="background"></div>
        <pre id="output">Bienvenue dans le Terminal</pre>
        <input type="text" id="input" autofocus>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>
