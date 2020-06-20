<?php


namespace OrdinaryEngineer\CodeExamples\DependencyInversionPrinciple\BadExample;


interface IToolInterface
{
    public function use() :void;
    public function getWeight() :int;
}