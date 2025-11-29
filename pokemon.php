<?php
// 4 PILAR OOP:
// ABSTRACTION      -> class Pokemon (template umum)
// INHERITANCE      -> Bellsprout extends Pokemon
// ENCAPSULATION    -> properti private + getter/setter
// POLYMORPHISM     -> specialMove() dioverride di class turunan

abstract class Pokemon {
    private $name;
    private $type;
    private $level;
    private $hp;
    private $specialMove;

    public function __construct($name, $type, $level, $hp, $specialMove){
        $this->name = $name;
        $this->type = $type;
        $this->level = $level;
        $this->hp    = $hp;
        $this->specialMove = $specialMove;
    }

    // Getter (Encapsulation)
    public function getName(){ return $this->name; }
    public function getType(){ return $this->type; }
    public function getLevel(){ return $this->level; }
    public function getHP(){ return $this->hp; }
    public function getSpecialMove(){ return $this->specialMove; }

    // Setter (Encapsulation)
    public function setLevel($lvl){ $this->level = $lvl; }
    public function setHP($hp){ $this->hp = $hp; }

    // ABSTRACT METHOD (Abstraction + Polymorphism)
    abstract public function specialMove();

    // Method umum untuk training
    public function train($jenis, $intensitas){
        $levelBefore = $this->level;
        $hpBefore    = $this->hp;

        // Rumus sederhana peningkatan
        $this->level += ceil($intensitas / 10);
        $this->hp += ceil($intensitas / 5);

        return [
            "jenis" => $jenis,
            "intensitas" => $intensitas,
            "level_before" => $levelBefore,
            "level_after" => $this->level,
            "hp_before" => $hpBefore,
            "hp_after" => $this->hp,
            "time" => date("Y-m-d H:i:s")
        ];
    }
}
?>
