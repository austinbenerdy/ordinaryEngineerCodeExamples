<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\DependencyInversionPrinciple\GoodExample;

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

    public function swapTool(IToolInterface $newTool) :void
    {
        $this->tool = $newTool;
    }
}