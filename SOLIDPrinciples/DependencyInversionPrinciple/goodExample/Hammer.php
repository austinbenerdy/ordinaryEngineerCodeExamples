<?php


namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\DependencyInversionPrinciple\GoodExample;


class Hammer implements IToolInterface
{
    private int $weight;

    public function use() :void
    {
        // Create code for using a Hammer
    }

    public function getWeight() :int
    {
        return $this->weight;
    }
}