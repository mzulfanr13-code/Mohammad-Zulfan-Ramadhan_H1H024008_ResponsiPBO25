<?php
require_once "Bellsprout.php";
session_start();

if(!isset($_SESSION["pokemon"])){
    $_SESSION["pokemon"] = new Bellsprout();
}

$pokemon = $_SESSION["pokemon"];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>PokéCare - Bellsprout</title>
</head>
<body>
<div class="container">

    <h1>(Inikah...) My PokeCare</h1>

    <div class="card">
        <h2><?= $pokemon->getName(); ?></h2>
        <img src="asset/Bellsprout.webp" class="poke-img">
        <p><b>Tipe:</b> <?= $pokemon->getType(); ?></p>
        <p><b>Level Awal:</b> <?= $pokemon->getLevel(); ?></p>
        <p><b>HP Awal:</b> <?= $pokemon->getHP(); ?></p>
        <p><b>Jurus Spesial:</b> <?= $pokemon->getSpecialMove(); ?></p>

        <div class="btn-group">
            <a href="train.php" class="btn">Mulai Latihan</a>
            <a href="history.php" class="btn">Riwayat Latihan</a>
        </div>
    </div>

</div>
</body>
</html>
