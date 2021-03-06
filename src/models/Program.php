<?php

class Program
{
    private $id;
    private $name;
    private $description;
    private $id_user;


    public function __construct($name, $description, $id_user=null, $id = null)
    {

        $this->name = $name;
        $this->description = $description;
        $this->id_user = $id_user;
        $this->id = $id;
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }



    public function getIdUser(): ?int
    {
        return $this->id_user;
    }


    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }




    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getDescription():string
    {
        return $this->description;
    }


    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


}