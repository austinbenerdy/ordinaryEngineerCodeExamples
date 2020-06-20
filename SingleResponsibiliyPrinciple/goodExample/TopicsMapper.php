<?php


namespace OrdinaryEngineer\CodeExamples\SingleResponsibilityPrinciple\GoodExample;


class TopicsMapper
{
    private TopicsClient $client;

    public function __construct(TopicsClient $client)
    {
        $this->client = $client;
    }

    public function retrieveTopics() :array
    {
        $data = $this->client->retrieveTopics();

        foreach ($data as $datum) {
            $reshapedData[] = $this->mapResponseToDataType($datum);
        }
    }

    private function mapResponseToDataType($data) :Topic
    {
        $component1 = isset($data['component1']) ?? "";
        $component2 = isset($data['component2']) ?? "";
        $component3 = isset($data['component3']) ?? "";
        $component4 = isset($data['component4']) ?? "";

        return new Topic($component1, $component2, $component3, $component4);
    }
}