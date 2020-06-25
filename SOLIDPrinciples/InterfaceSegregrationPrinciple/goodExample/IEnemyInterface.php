<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\InterfaceSegregationPrinciple\GoodExample;

interface IEnemyInterface
{
    public function takeDamage(int $damageValue) :void;
    public function doDamage() :void;
    public function performDeath() :void;
}