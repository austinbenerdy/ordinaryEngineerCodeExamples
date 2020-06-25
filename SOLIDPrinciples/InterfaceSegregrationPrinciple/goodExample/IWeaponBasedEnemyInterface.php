<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\InterfaceSegregationPrinciple\GoodExample;

interface IWeaponBasedEnemyInterface extends IEnemyInterface
{
    public function getWeaponDamageValue() :int;
    public function swapWeapon(IWeapon $newWeapon) :void;
}