<?php

namespace OrdinaryEngineer\CodeExamples\LiskovSubstitutionPrinciple\BadExample;

class Client
{
    private int $id;
    private string $email;
    private int $agentId;

    public function __construct(string $email, string $agentId)
    {
        $this->email = $email;
        $this->agentId = $agentId;
    }

    public function save() :void
    {
        // save to database
    }
}