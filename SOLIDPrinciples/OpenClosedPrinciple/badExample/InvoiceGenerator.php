<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\OpenClosePrinciple\BadExample;

class InvoiceGenerator
{
    public array $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function generate() :Invoice
    {

        /*
         * Here we take a bunch of data saved in
         * $this->data
         */

        if (isset($this->data['ruleset']) && isset($this->data['ruleset']) == "RulesetOne") {
            /**
             * We had algorithms built to handle this
             * based on various Rules.
             */
        } else if (isset($this->data['ruleset']) && isset($this->data['ruleset']) == "RulesetTwo") {
            /**
             * Alternative Algorithm based on alternative ruleset.
             */
        }


        return new Invoice();
    }
}