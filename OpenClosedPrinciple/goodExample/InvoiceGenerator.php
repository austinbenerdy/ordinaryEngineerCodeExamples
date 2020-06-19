<?php

namespace OrdinaryEngineer\CodeExamples\OpenClosePrinciple\GoodExample;

class InvoiceGenerator
{

    public function generate(array $data, RuleSet $ruleset) :Invoice
    {
        // Do stuff based on Ruleset and return Invoice
        $componentOne = $ruleset->calculateComponentOne($data);
        $componentTwo = $ruleset->calculateComponentTwo($data);
        $componentThree = $ruleset->calculateComponentThree($data);
        $componentFour = $ruleset->calculateComponentFour($data);

        // Add functionality to take these values and generate the invoice.

        return new Invoice();
    }
}