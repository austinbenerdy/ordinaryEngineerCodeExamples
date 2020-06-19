<?php

namespace OrdinaryEngineer\CodeExamples\InterfaceSegregationPrinciple\GoodExample;

interface IWeaponBasedEnemyInterface extends IEnemyInterface
{
    public function getWeaponDamageValue() :int;
    public function swapWeapon(IWeapon $newWeapon) :void;
}