<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idle Game</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="game">
    <h1>Idle Game</h1>

    <section class="resources">
        <div class="card">
            <h2>Argent</h2>
            <p id="money">0</p>
        </div>
        <div class="card">
            <h2>Production</h2>
            <p><span id="production">0</span> / seconde</p>
        </div>
    </section>

    <section class="actions">
        <button id="collect">Produire +1</button>
    </section>

    <section class="shop">
        <h2>Boutique</h2>
        <div class="item">
            <div>
                <h3>Générateur</h3>
                <p>Produit automatiquement 1 argent par seconde.</p>
                <p>Possédés : <span id="generators">0</span></p>
            </div>
            <button id="buy-generator">
                Acheter — <span id="generator-price">10</span>
            </button>
        </div>
    </section>
</main>
<script src="js/game.js"></script>
</body>
</html>
