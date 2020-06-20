<?php

namespace OrdinaryEngineer\CodeExamples\SingleResponsibilityPrinciple\BadExample;

class TopicsService
{
    private HTTPRequestClient $client;

    public function __construct(HTTPRequestClient $client)
    {
        $this->client = $client;
    }

    public function getTopics() :array
    {
        return  $this->requestFromAPI();
    }


    private function mapResponseToDataType($data) :Topic
    {
        $component1 = isset($data['component1']) ?? "";
        $component2 = isset($data['component2']) ?? "";
        $component3 = isset($data['component3']) ?? "";
        $component4 = isset($data['component4']) ?? "";

        return new Topic($component1, $component2, $component3, $component4);
    }

    private function requestFromAPI() :array
    {
        // Get Access Token from somewhere
        global $_GLOBALUSER;
        $auth = $_GLOBALUSER->getAccessToken();

        // I stored the URL somewhere for this
        $url = "";

        $response = $this->client->request("GET", $url, [
            'x-auth' => $auth
        ]);
        $results = json_decode($response);

        $data = $results->data;
        $reshapedData = [];

        foreach ($data as $datum) {
            $reshapedData[] = $this->mapResponseToDataType($datum);
        }

        return $reshapedData;
    }
}