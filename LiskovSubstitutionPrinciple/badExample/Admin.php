<?php

class Admin extends Agent
{
    public function viewAdminPage() :void
    {
        // Do Something
    }

    public function executeAdminFunction() :void
    {
        // Do Something
    }

    public function sendEmailBlast() :array
    {
        // Explicitely Do Nothing Because Permission Removed.
        return [];
    }

    public function getClientList(): array
    {
        // Explicitely Do Nothing Because Permission Removed.
        return [];
    }
}