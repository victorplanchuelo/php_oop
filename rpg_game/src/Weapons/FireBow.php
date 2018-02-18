<?php

namespace RPG_Game\Weapons;

use RPG_Game\Unit;

class FireBow extends Weapon
{
    protected $damage = 30;
    protected $description = ':unit dispara una flecha de fuego a :opponent';
    protected $magical = true;
}
