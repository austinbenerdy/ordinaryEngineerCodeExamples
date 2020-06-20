<?php


namespace OrdinaryEngineer\CodeExamples\SingleResponsibilityPrinciple\GoodExample;


class TopicsClient extends HTTPRequestClient
{
    private $url;

    public function retrieveTopics(): array
    {
        // Get Access Token from somewhere
        global $_GLOBALUSER;
        $auth = $_GLOBALUSER->getAccessToken();

        $response = $this->request("GET", $this->url, [
            'x-auth' => $auth
        ]);
        $results = json_decode($response);

        return $results->data;
    }
}