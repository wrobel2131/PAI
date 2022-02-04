<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Program.php';

class ProgramRepository extends Repository
{

    public function getProgram(int $id): ?Program
    {
        $statement = $this->database->connect()->prepare('
            SELECT * FROM public.programs WHERE id = :id
        ');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $program = $statement->fetch(PDO::FETCH_ASSOC);

        if ($program == false) {
            return null;
        }

        return new Program(
            $program['name'],
            $program['description']
        );

    }

    public function getPrograms(): array
    {
        $result = [];
        $statement = $this->database->connect()->prepare('
            SELECT * from programs WHERE "id_user" = :id
        ');
        $id = $_COOKIE['user_id_for_cookie'];
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();
        $programs = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($programs as $program) {
            $result[] = new Program(
                $program['name'],
                $program['description'],
                $program['id_user'],
                $program['id']
            );
        }


        return $result;

    }

    public function addProgram(Program $program): void
    {
        $statement = $this->database->connect()->prepare('
            INSERT INTO programs (name, description, id_user)
            VALUES (?, ?, ?)
        ');


        $id_user = 1; //pobrac id_usera na podstawie sesji/cookie

        $statement->execute([
            $program->getName(),
            $program->getDescription(),
            $id_user
//            $program->getId()
        ]);
    }
}


