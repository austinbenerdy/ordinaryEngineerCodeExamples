<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\LiskovSubstitutionPrinciple\BadExample;

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