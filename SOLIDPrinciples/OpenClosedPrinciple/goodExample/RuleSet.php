<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\OpenClosePrinciple\GoodExample;

interface RuleSet
{
    public function calculateComponentOne(array $data);
    public function calculateComponentTwo(array $data);
    public function calculateComponentThree(array $data);
    public function calculateComponentFour(array $data);
}