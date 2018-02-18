<?php

namespace RPG_Game\Armors;

use RPG_Game\Attack;

abstract class Armor
{
    public function absorbDamage(Attack $attack)
    {
        if($attack->isMagical())
        {
            return $this->absorbMagicDamage($attack);
        }

        return $this->absorbPhysicalDamage($attack);
    }

    //Se puede poner las siguientes funciones por defecto aquí
    // y sobreescribirlas en las clases que extiendan de Armor
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

    public function absorbMagicDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}
