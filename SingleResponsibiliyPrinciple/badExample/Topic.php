<?php

namespace OrdinaryEngineer\CodeExamples\SingleResponsibilityPrinciple\BadExample;


class Topic
{
    private string $component1Named;
    private string $component2Named;
    private string $component3Named;
    private string $component4Named;

    public function __construct($component1, $component2, $component3, $component4)
    {
        $this->component1Named = $component1;
        $this->component2Named = $component2;
        $this->component3Named = $component3;
        $this->component4Named = $component4;
    }
}