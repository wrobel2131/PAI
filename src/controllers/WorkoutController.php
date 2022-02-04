<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Workout.php';
require_once __DIR__.'/../repository/WorkoutRepository.php';

class WorkoutController extends AppController
{
    private $messages = [];
    private  $workoutRepository;

    public function __construct()
    {
        parent::__construct();
        $this->workoutRepository = new WorkoutRepository();

    }

    public function specificProgram()
    {
        $program_id = 2;
        $workouts = $this->workoutRepository->getWorkoutsInProgram($program_id);
//        var_dump($programs);
        $this->render('specific-program-app', ['workouts' => $workouts]);
    }


    public function addWorkoutToProgram()
    {
        if($this->isPost())
        {
            $workout = new Workout($_POST['workout-name']);
            $this->workoutRepository->addWorkoutToProgram($workout);
            return $this->render('specific-program-app', [
                'messages' => $this->messages,
                'workouts' => $this->workoutRepository->getWorkoutsInProgram(2)
            ]);
        }

        return $this->render('add-workout-to-program-app', ['messages' => $this->messages]);

    }







}