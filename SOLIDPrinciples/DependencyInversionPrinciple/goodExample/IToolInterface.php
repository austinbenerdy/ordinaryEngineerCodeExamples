<?php


namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\DependencyInversionPrinciple\GoodExample;


interface IToolInterface
{
    public function use() :void;
    public function getWeight() :int;
}