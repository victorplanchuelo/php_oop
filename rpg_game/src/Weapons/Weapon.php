<?php

namespace RPG_Game\Weapons;

use RPG_Game\Unit;
use RPG_Game\Attack;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;
    protected $description = ':unit ataca a :oponente';

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }
}
