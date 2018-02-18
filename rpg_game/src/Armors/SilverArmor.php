<?php

namespace RPG_Game\Armors;

use RPG_Game\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;
    }
}
