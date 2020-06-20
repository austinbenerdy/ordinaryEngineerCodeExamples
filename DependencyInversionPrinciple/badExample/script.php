<?php

namespace OrdinaryEngineer\CodeExamples\DependencyInversionPrinciple\BadExample;


$pickaxe = new Pickaxe();
$hammer = new Hammer();


$player = new PlayerCharacter($pickaxe);

$player->useTool();
$player->swapTool($hammer);
$player->useTool();