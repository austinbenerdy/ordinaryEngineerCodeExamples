<?php

namespace OrdinaryEngineer\CodeExamples\LiskovSubstitutionPrinciple\GoodExample;

class Admin extends User
{
    public function viewAdminPage() :void
    {
        // Do Something
    }

    public function executeAdminFunction() :void
    {
        // Do Something
    }
}