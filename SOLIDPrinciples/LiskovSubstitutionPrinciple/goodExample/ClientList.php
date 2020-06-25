<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\LiskovSubstitutionPrinciple\GoodExample;

class ClientList
{
    public function __construct()
    {
        return $this;
    }

    public function where($key, $value): ClientList
    {
        return $this;
    }

    public function get() :array
    {
        // This would retrieve from database in functional code
        return [];
    }
}