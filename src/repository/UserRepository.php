<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $statement = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['name'],
            $user['surname'],
            $user['email'],
            $user['hashedPassword'],
            $user['enabled']
        );

    }

    public function getUserById(int $id): ?User
    {

        $statement = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE id = :id
        ');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['name'],
            $user['surname'],
            $user['email'],
            $user['hashedPassword'],
            $user['enabled']
        );

    }


    public function addUser(User $user)
    {

        $statement = $this->database->connect()->prepare('
            INSERT INTO users (name, surname, email, "hashedPassword" )
            VALUES (?, ?, ?, ?)
        ');


        $statement->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getEmail(),
            $user->getHashedPassword()
        ]);
    }

    public function getUserId(string $email)
    {
        $statement = $this->database->connect()->prepare('
            SELECT "id" FROM users WHERE users.email = :email
        ');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_COLUMN);
    }
}


