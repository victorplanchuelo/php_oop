<?php

namespace RPG_Game\Armors;

use RPG_Game\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}
