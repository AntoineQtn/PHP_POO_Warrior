<?php 

$GLOBALS['warriorName'] = 'Hulk';

class MarvelWarrior extends Warrior 
{
    public int $superPower;

    public function getPower(): int { return $this->superPower; }

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->superPower = 100;
    }
}
