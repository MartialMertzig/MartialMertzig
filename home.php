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
    <div class="terminal">
    <div class="logo-container-terminal">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Logo-02-02-02-02-02.png'; ?> " alt="Votre Logo">
    </div>
        <div class="background"></div>
        <pre id="output">Bienvenue dans le terminal, veuillez vous identifier.</pre>
        <input type="text" id="input" autofocus>
    </div>
</body>

</html>
