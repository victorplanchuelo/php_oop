<?php

namespace RPG_Game;

require '../vendor/autoload.php';

/*
spl_autoload_register(function($className) {
	if(strpos($className, 'RPG_Game//') == 0)
	{
		$className = str_replace('RPG_Game\\','',$className);

		if(file_exists("src/$className.php"))
			require "src/$className.php";
	}
});
*/
/*
require 'src/Unit.php';
require 'src/Soldier.php';
require 'src/Archer.php';

require 'src/Armor.php';
require 'src/BronzeArmor.php';
require 'src/SilverArmor.php';
require 'src/CursedArmor.php';
require 'src/EvasionArmor.php';
*/

Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha a :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

Log::setLogger(new HtmlLogger());

$unit2 = Unit::createSoldier('Monster')
                ->setArmor(new Armors\SilverArmor())
                ->setWeapon(new Weapons\BasicSword())
                ->setShield();


$unit1 = new Unit('Planchu', new Weapons\FireBow);


//$unit1->move('el norte');
$unit1->attack($unit2);

$unit1->attack($unit2);
$unit2->attack($unit1);
