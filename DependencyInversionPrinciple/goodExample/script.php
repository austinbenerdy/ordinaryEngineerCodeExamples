<?php

namespace OrdinaryEngineer\CodeExamples\DependencyInversionPrinciple\GoodExample;


$pickaxe = new Pickaxe();
$hammer = new Hammer();


$player = new PlayerCharacter($pickaxe);

$player->useTool();
$player->swapTool($hammer);
$player->useTool();