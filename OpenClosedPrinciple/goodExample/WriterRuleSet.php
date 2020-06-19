<?php


class WriterRuleSet implements RuleSet
{
    public function calculateComponentOne(array $data) :float
    {
        return (float) rand();
    }

    public function calculateComponentTwo(array $data) :float
    {
        return (float) rand();
    }

    public function calculateComponentThree(array $data) :float
    {
        return (float) rand();
    }

    public function calculateComponentFour(array $data) :float
    {
        return (float) rand();
    }
}