<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Exercise.php';
require_once __DIR__.'/../repository/ExerciseRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

class ExerciseController extends AppController
{
    private $messages = [];
    private  $exerciseRepository;
    private $nameCookie;
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->exerciseRepository = new ExerciseRepository();
        $this->userRepository = new UserRepository();
        $this->nameCookie = 'user_id_for_cookie';
    }

    public function exercises()
    {
        if (!isset($_COOKIE[$this->nameCookie])) {
            $this->render('sign-in');
        }

        $id_user = $_COOKIE[$this->nameCookie];


        $user = $this->userRepository->getUserById($id_user);
        $exercises = $this->exerciseRepository->getUserAllExercises();
        $this->render('exercises-app', ['exercises' => $exercises, 'user' => $user]);
    }

}