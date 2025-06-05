<?php

require_once __DIR__ . "/../base/LocalWarrior.php";


$GLOBALS['warriorName'] = 'Pipou';

abstract class Warrior extends LocalWarrior
{
    public string $name;
    public int $speed;
    public int $life;
    public int $shield;
    public string $imageUrl;
    public ?Weapon $weapon;

    public function __construct( string $warriorName ){
        $this->name = $warriorName;
        $this->speed = 30;
        $this->life = 100;
        $this->shield = 20;
    }

}
