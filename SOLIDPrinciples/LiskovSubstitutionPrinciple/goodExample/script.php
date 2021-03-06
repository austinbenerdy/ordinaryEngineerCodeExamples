<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\LiskovSubstitutionPrinciple\GoodExample;

$agent = new Agent();
$agent->id = 45;

$agentClient = new Client('email@example.com', $agent->id);
$agentClient->save();

$admin = new Admin();
$admin->id = 72;

$adminClient = new Client('email@example.com', $admin->id);
$adminClient->save();

// Send Emails
$agent->sendEmailBlast();
$admin->sendEmailBlast();