<?php
require_once "Pokemon.php";

class Bellsprout extends Pokemon {

    public function __construct(){
        parent::__construct(
            "Bellsprout",
            "Grass / Poison",
            1,          // level awal
            10,         // HP awal
            "Chlorophyll" // special move
        );
    }

    public function specialMove(){
        return "Bellsprout menggunakan Chlorophyll! Kemampuan yang menggandakan Kecepatan pengguna saat cuaca terik matahari.";
    }
}
?>
