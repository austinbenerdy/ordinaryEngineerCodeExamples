<?php


namespace OrdinaryEngineer\CodeExamples\DependencyInversionPrinciple\BadExample;


class PlayerCharacter
{
    private IToolInterface $tool;

    public function __construct(Pickaxe $pickaxe)
    {
        $this->tool = $pickaxe;
    }

    public function useTool() :void
    {
        $this->tool->use();
    }

    public function swapTool(Tool $newTool) :void
    {
        $this->tool = $newTool;
    }
}