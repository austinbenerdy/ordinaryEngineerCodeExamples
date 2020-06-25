<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\DependencyInversionPrinciple\GoodExample;

$pickaxe = new Pickaxe();
$hammer = new Hammer();

$player1 = new PlayerCharacter($pickaxe);

$player1->useTool();
$player1->swapTool($hammer);
$player1->useTool();

$player2 = new PlayerCharacter($hammer);

$player2->useTool();
$player2->swapTool($pickaxe);
$player2->useTool();