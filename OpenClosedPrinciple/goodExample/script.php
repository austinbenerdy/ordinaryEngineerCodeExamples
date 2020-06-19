<?php

namespace OrdinaryEngineer\CodeExamples\OpenClosePrinciple\GoodExample;

$writerRuleset = new WriterRuleSet();
$editorRuleset = new EditorRuleSet();
$freelancerRuleset = new FreelancerRuleSet();

$writerData = [];
$editorData = [];
$freelancerData = [];

$invoiceGenerator = new InvoiceGenerator();

$writerInvoice = $invoiceGenerator->generate($writerData, $writerRuleset);
$editorInvoice = $invoiceGenerator->generate($editorData, $editorRuleset);
$freelancerInvoice = $invoiceGenerator->generate($freelancerData, $freelancerRuleset);

