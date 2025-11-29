<?php
require_once "Bellsprout.php";
session_start();

if(!isset($_SESSION["pokemon"])){
    $_SESSION["pokemon"] = new Bellsprout();
}

$pokemon = $_SESSION["pokemon"];
$result = null;

if(isset($_POST["train"])){
    $jenis = $_POST["jenis"];
    $intensitas = intval($_POST["intensitas"]);

    $result = $pokemon->train($jenis, $intensitas);
    $moveDesc = $pokemon->specialMove();

    if(isset($_POST["train"])){
    $jenis = $_POST["jenis"];
    $intensitas = intval($_POST["intensitas"]);

    $result = $pokemon->train($jenis, $intensitas);
    $moveDesc = $pokemon->specialMove();

    if(!isset($_SESSION["history"])) $_SESSION["history"] = [];

    // simpan riwayat
    $result["move"] = $moveDesc;
    $_SESSION["history"][] = $result;
}

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Latihan Pokémon</title>
</head>
<body>
<div class="container">
<h1>Latihan Bellsprout</h1>

<form method="POST" class="card">
    <label>Jenis Latihan</label>
    <select name="jenis" required>
        <option value="Attack">Attack</option>
        <option value="Defense">Defense</option>
        <option value="Speed">Speed</option>
    </select>

    <label>Intensitas Latihan</label>
    <input type="number" name="intensitas" required min="1">

    <button type="submit" name="train" class="btn">Latih!</button>
</form>

<?php if($result): ?>
<div class="card">
    <h3>Hasil Latihan</h3>
    <p><b>Jenis:</b> <?= $result["jenis"]; ?></p>
    <p><b>Intensitas:</b> <?= $result["intensitas"]; ?></p>

    <p><b>Level:</b> <?= $result["level_before"]; ?> ➜ <?= $result["level_after"]; ?></p>
    <p><b>HP:</b> <?= $result["hp_before"]; ?> ➜ <?= $result["hp_after"]; ?></p>

    <p><b>Jurus Spesial:</b> <?= $result["move"]; ?></p>
</div>
<?php endif; ?>

<div class="btn-group">
    <a href="index.php" class="btn">Kembali ke Beranda</a>
    <a href="history.php" class="btn">Riwayat Latihan</a>
</div>

</div>
</body>
</html>
