<?php

class Agent
{
    public string $firstName;
	public string $lastName;
	public string $email;
	public string $password;

	public int $id; // Would be private but example code
	private array $_clientList;

	public function __construct()
    {
        // Do Constructor Thing
    }

	public function sendEmailBLast() :array
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