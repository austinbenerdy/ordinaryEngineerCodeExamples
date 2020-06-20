<?php


namespace OrdinaryEngineer\CodeExamples\DependencyInversionPrinciple\BadExample;


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