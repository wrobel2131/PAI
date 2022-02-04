<?php

class Workout
{
    private $name;
    private $id_program;


    public function __construct(string $name, int $id_program=null)
    {
        $this->name = $name;
        $this->id_program = $id_program;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getIdProgram(): int
    {
        return $this->id_program;
    }


    public function setIdProgram(int $id_program): void
    {
        $this->id_program = $id_program;
    }




}