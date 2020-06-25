<?php

namespace OrdinaryEngineer\CodeExamples\SOLIDPrinciples\SingleResponsibilityPrinciple\GoodExample;

class TopicsService
{
    private TopicsMapper $mapper;

    public function __construct(TopicsMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    public function getTopics() :array
    {
        return  $this->mapper->retrieveTopics();
    }
}