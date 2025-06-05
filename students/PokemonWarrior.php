<?php 

$GLOBALS['warriorName'] = 'Pikachu';

class PokemonWarrior extends Warrior 
{
    public int $level;

    public function getPower(): int { return $this->level; }

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->level = 1;
    }
}

