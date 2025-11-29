<?php
session_start();
$history = $_SESSION["history"] ?? [];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Riwayat Latihan</title>
</head>
<body>
<div class="container">

<h1>Riwayat Latihan Bellsprout</h1>

<?php if(!isset($_SESSION["history"]) || count($_SESSION["history"]) === 0): ?>
    <p class="empty">Belum ada sesi latihan.</p>
<?php else: ?>
    <?php foreach($_SESSION["history"] as $h): ?>

        <div class="card">
            <p><b>Jenis:</b> <?= $h["jenis"]; ?></p>
            <p><b>Intensitas:</b> <?= $h["intensitas"]; ?></p>
            <p><b>Level:</b> <?= $h["level_before"]; ?> ➜ <?= $h["level_after"]; ?></p>
            <p><b>HP:</b> <?= $h["hp_before"]; ?> ➜ <?= $h["hp_after"]; ?></p>
            <p><b>Waktu:</b> <?= $h["time"]; ?></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<div class="btn-group">
    <a href="index.php" class="btn">Kembali</a>
</div>

</div>
</body>
</html>
