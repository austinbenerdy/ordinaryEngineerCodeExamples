<?php


namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\DependencyInversionPrinciple\BadExample;


interface IToolInterface
{
    public function use() :void;
    public function getWeight() :int;
}