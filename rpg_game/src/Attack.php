<?php

namespace RPG_Game;

class Attack
{
    protected $damage;
    protected $magical;
    protected $description;
    //protected $type;

    //public function __construct($damage, $type)
    public function __construct($damage, $magical, $description)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
        //$this->type = $type;
    }

    public function getDamage()
    {
        return $this->damage;
    }
    /*
    public function getType()
    {
        return $this->type;
    }
    */

    public function isMagical()
    {
        return $this->magical;
    }

    public function isPhysical()
    {
        return ! $this->isMagical();
    }

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return str_replace(
            [':unit',':opponent'],
            [$attacker->getName(), $opponent->getName()],
            $this->description
        );
    }
}
