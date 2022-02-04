<?php

require_once __DIR__.'/../../Database.php';

class Repository
{
    protected $database;

    public function __construct()
    {
        //przemyslec wzorzec projektowa np singleton
        $this->database = new Database();
    }


}