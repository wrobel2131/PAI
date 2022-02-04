<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Exercise.php';


class ExerciseRepository extends Repository
{
    public function getExercise(int $id): ?Exercise
    {
        $statement = $this->database->connect()->prepare('
            SELECT * FROM public.exercises WHERE id = :id
        ');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $exercise = $statement->fetch(PDO::FETCH_ASSOC);

        if ($exercise == false) {
            return null;
        }

        return new Exercise(
            $exercise['name'],
            $exercise['description']
        );
    }
    public function getUserAllExercises(): array
    {
        $result = [];
        $statement = $this->database->connect()->prepare('
            SELECT * from exercises WHERE "id_user" = :id
        ');
        $id = $_COOKIE['user_id_for_cookie'];
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();
        $exercises = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($exercises as $exercise) {
            $result[] = new Exercise(
                $exercise['name'],
                $exercise['description'],
                $exercise['id_user'],
                $exercise['id']
            );
        }

        return $result;

    }

    public function addExercise(Exercise $exercise): void
    {
        $statement = $this->database->connect()->prepare('
            INSERT INTO exercises (name, description, id_user)
            VALUES (?, ?, ?)
        ');


        $id_user = $_COOKIE['user_id_for_cookie'];

        $statement->execute([
            $exercise->getName(),
            $exercise->getDescription(),
            $id_user
        ]);
    }



}