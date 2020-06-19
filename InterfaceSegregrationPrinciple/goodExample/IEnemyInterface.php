<?php

namespace OrdinaryEngineer\CodeExamples\InterfaceSegregationPrinciple\GoodExample;

interface IEnemyInterface
{
    public function takeDamage(int $damageValue) :void;
    public function doDamage() :void;
    public function performDeath() :void;
}