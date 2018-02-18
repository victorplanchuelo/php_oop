<?php

namespace RPG_Game\Weapons;

use RPG_Game\Unit;

class BasicBow extends Weapon
{
    protected $damage = 20;
    protected $description = ':unit dispara una flecha a :opponent';
}
