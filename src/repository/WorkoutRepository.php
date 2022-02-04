<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Workout.php';

class WorkoutRepository extends Repository
{
    public function getWorkout(int $id): ?Workout
    {
        $statement = $this->database->connect()->prepare('
            SELECT * FROM public.workouts WHERE id = :id
        ');

        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $workout = $statement->fetch(PDO::FETCH_ASSOC);

        if ($workout == false) {
            //tutaj code review, nalezaloby wyrzucic wyjatek jakis
            return null;
        }

        return new Workout(
            $workout['name'],
            $workout['id_program']
        );

    }

    public function getWorkoutsInProgram(int $id_program): array
    {
//        $program_id = $id_program;
        $program_id = 2;
        $result = [];
        $statement = $this->database->connect()->prepare('
            SELECT * from workouts w WHERE w.id_program = :program_id
        ');
        $statement->bindParam(':program_id', $program_id, PDO::PARAM_INT);

        $statement->execute();
        $workouts = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($workouts as $workout) {
            $result[] = new Workout(
                $workout['name'],
                $workout['id_program']
            );
        }
        return $result;
    }

    public function addWorkoutToProgram(Workout $workout): void
    {
        $statement = $this->database->connect()->prepare('
            INSERT INTO workouts (name, id_program)
            VALUES (?, ?)
        ');

        $id_program = 2; //pobrac id projetku, do ktorego dodajemy workout
        //ewentualnie jakos przekazac do funckji
        $statement->execute([
            $workout->getName(),
            $id_program
        ]);
    }



}