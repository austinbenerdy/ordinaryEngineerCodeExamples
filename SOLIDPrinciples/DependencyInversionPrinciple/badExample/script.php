<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\DependencyInversionPrinciple\BadExample;


$pickaxe = new Pickaxe();
$hammer = new Hammer();


$player = new PlayerCharacter($pickaxe);

$player->useTool(); // use pickaxe
$player->swapTool($hammer);
$player->useTool(); // use hammer