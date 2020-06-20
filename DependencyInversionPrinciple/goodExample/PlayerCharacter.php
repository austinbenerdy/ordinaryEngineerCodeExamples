<?php


namespace OrdinaryEngineer\CodeExamples\DependencyInversionPrinciple\GoodExample;


class PlayerCharacter
{
    private IToolInterface $tool;

    public function __construct(IToolInterface $startingTool)
    {
        $this->tool = $startingTool;
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