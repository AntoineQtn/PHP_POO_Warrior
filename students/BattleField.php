<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";
require_once "StartrekWarrior.php";
require_once "MarvelWarrior.php";
require_once "PokemonWarrior.php";
require_once "Weapon.php";

class BattleField extends BaseBattleField
{
    public static function createMyWarrior(): void
    {
        // 1. Récupération des données globales
        $name = $GLOBALS['warriorName'] ?? 'Sans Nom'; 
        $imageUrl = $GLOBALS['imageUrl'] ?? 'https://example.com/default-warrior.png'; // URL par défaut si non défini
        $weaponData = $GLOBALS['weapon'] ?? [
            'id' => 1,
            'strength' => 10,
            'imageUrl' => 'https://example.com/default-weapon.png' // URL par défaut si non défini
        ]; 

        // 2. Création du guerrier (ici un PokemonWarrior)
        $warrior = new PokemonWarrior($name);
        $warrior->imageUrl = $imageUrl;

        // 3. Création de l’arme
        $weapon = new Weapon($weaponData['id'], $weaponData['strength']);
        $weapon->imageUrl = $weaponData['imageUrl'];

        // 4. Affectation de l’arme
        $warrior->weapon = $weapon;

        // 5. Sauvegarde
        $warrior->saveNew();
    }

    public static function createOtherWarrior(): void
    {
    $names = ['Spock', 'IronMan', 'Pikachu', 'Thor', 'Ash', 'Kirk'];
    $classes = ['PokemonWarrior', 'StartrekWarrior', 'MarvelWarrior'];
    $images = [
        'https://example.com/spock.png',
        'https://example.com/ironman.png',
        'https://example.com/pikachu.png',
        'https://example.com/thor.png',
        'https://example.com/ash.png',
        'https://example.com/kirk.png'
    ];
    $weaponImages = [
        'https://example.com/blaster.png',
        'https://example.com/hammer.png',
        'https://example.com/pokeball.png'
    ];

    $name = $names[array_rand($names)];
    $className = $classes[array_rand($classes)];
    $imageUrl = $images[array_rand($images)];

    $warrior = new $className($name);
    $warrior->imageUrl = $imageUrl;

    $weapon = new Weapon(rand(1, 1000), rand(10, 100)); 
    $weapon->imageUrl = $weaponImages[array_rand($weaponImages)];
    $warrior->weapon = $weapon;

    $warrior->saveNew();
    }

}
