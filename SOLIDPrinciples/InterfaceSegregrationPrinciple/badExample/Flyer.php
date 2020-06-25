<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\InterfaceSegregationPrinciple\BadExample;

class Flyer implements IEnemyInterface
{
    private int $_health;
    private int $_maxHealth = 1000;

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
        // Do melee bite attack to player
    }
    public function performDeath() :void
    {
        // Doesn't matter for this example
    }

    public function getWeaponDamageValue() :int
    {
        // Wait, my flyer doesnt have a weapon....
        // return 0 i guess?
        return 0;
    }

    public function swapWeapon(IWeapon $newWeapon) :void
    {
        // Umm yeah, again, Flyer doesnt have a weapon....
        // Intentionally do nothing?
    }
}