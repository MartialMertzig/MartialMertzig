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
    <div class="terminal">
        <div class="background"></div>
        <pre id="output">Bienvenue dans le Terminal</pre>
        <input type="text" id="input" autofocus>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>
