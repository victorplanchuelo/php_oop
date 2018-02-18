<?php

namespace RPG_Game\Armors;

use RPG_Game\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() * 2;
    }
}
