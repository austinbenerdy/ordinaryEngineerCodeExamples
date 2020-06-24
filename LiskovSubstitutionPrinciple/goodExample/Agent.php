<?php

namespace OrdinaryEngineer\CodeExamples\LiskovSubstitutionPrinciple\GoodExample;

class Agent extends User
{
	private array $_clientList;

	public function sendEmailBlast() :array
    {
        // Send Email Blast to Clients
        foreach ($this->_clientList as $client) {
            // Send Email to client
        }

        // array the array of sent emails
        return [];
    }

    public function getClientList() :array
    {
        $clientList = new ClientList();
        $this->_clientList = $clientList->where('agentId', $this->id)->get();
        return $this->_clientList;
    }
}