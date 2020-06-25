<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\LiskovSubstitutionPrinciple\GoodExample;


abstract class User
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;

    public int $id; // Would be private but example code

    public function __construct()
    {
        // Do Constructor Thing
    }
}