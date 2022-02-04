<?php

class User
{
    private $name;
    private $surname;
    private $email;
    private $hashedPassword;
    private $enabled;



    public function __construct(string $name, string $surname, string $email, string $hashedPassword, bool $enabled=null)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->hashedPassword = $hashedPassword;

        $this->enabled = $enabled;

    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getSurname(): string
    {
        return $this->surname;
    }


    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


    public function getHashedPassword(): string
    {
        return $this->hashedPassword;
    }


    public function setHashedPassword(string $hashedPassword): void
    {
        $this->hashedPassword = $hashedPassword;
    }




    public function isEnabled(): bool
    {
        return $this->enabled;
    }


    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }


}