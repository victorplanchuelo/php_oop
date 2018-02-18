<?php

namespace RPG_Game\Armors;

use RPG_Game\Attack;

class EvasionArmor extends Armor
{
	public function absorbDamage(Attack $attack)
    {
		if(mt_rand(0,1))
			return 0;

		return $attack->getDamage();
    }
}
