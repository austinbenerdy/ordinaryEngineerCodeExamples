<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\InterfaceSegregationPrinciple\BadExample;


class Bandit implements IEnemyInterface
{
    private int $_health;
    private int $_maxHealth = 1000;
    private IWeapon $_currentWeapon;

    public function __construct()
    {
        $this->_health = $this->_maxHealth;
    }

    public function takeDamage(int $damageValue) :void
    {
        $this->_health -= $damageValue;
    }

    public function doDamage() :void
    {
        // Doesn't matter for this example
    }
    public function performDeath() :void
    {
        // Doesn't matter for this example
    }

    public function getWeaponDamageValue() :int
    {
        return $this->_currentWeapon->getDamageOutput();
    }

    public function swapWeapon(IWeapon $newWeapon) :void
    {
        $this->_currentWeapon = $newWeapon;
    }
}