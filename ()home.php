<!DOCTYPE html>
<html lang="fr">
<!-- Importe le style.css et le Header.php -->
<style> <?php include ('style.css'); ?> </style>
<?php include ('header-terminal.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/script.js"></script>
</head>

<body id="terminal">
    <div class="terminal">
        <pre id="output">Bienvenue dans le terminal, veuillez vous identifier.</pre>
        <input type="text" id="input" autofocus>
    </div>
    <?php include ('footer-terminal.php'); ?>
</body>
</html>
