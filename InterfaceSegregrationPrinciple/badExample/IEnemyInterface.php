<?php

namespace OrdinaryEngineer\CodeExamples\InterfaceSegregationPrinciple\BadExample;

interface IEnemyInterface
{
    public function takeDamage(int $damageValue) :void;
    public function doDamage() :void;
    public function performDeath() :void;

    public function getWeaponDamageValue() :int;
    public function swapWeapon(IWeapon $newWeapon) :void;
}