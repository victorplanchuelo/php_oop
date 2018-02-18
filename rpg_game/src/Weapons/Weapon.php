<?php

namespace RPG_Game\Weapons;

use RPG_Game\Unit;
use RPG_Game\Attack;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->getDescription());
    }

    protected function getDescription()
    {
        return str_replace('RPG_Game\Weapons\\','', get_class($this) . 'Attack');
    }
}
