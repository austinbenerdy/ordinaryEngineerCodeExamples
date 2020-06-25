<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\InterfaceSegregationPrinciple\GoodExample;

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
}