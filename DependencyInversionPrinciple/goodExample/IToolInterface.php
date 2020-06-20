<?php


namespace OrdinaryEngineer\CodeExamples\DependencyInversionPrinciple\GoodExample;


interface IToolInterface
{
    public function use() :void;
    public function getWeight() :int;
}