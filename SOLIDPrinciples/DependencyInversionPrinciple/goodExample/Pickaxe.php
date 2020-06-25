<?php


namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\DependencyInversionPrinciple\GoodExample;


class Pickaxe implements IToolInterface
{
    private int $weight;

    public function use() :void
    {
        // Create code for using a Pickaxe
    }

    public function getWeight() :int
    {
        return $this->weight;
    }
}