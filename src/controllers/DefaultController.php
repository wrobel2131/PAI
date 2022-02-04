<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/UserRepository.php';


class DefaultController extends AppController {


    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $nameCookie;
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->nameCookie = 'user_id_for_cookie';

    }


    public function settings()
    {
        if (!isset($_COOKIE[$this->nameCookie])) {
            $this->render('sign-in');
        }

        $id_user = $_COOKIE[$this->nameCookie];


        $user = $this->userRepository->getUserById($id_user);
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validateImage($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            // TODO create new project object and save it in database
//            $project = new Project($_POST['title'], $_POST['description'], $_FILES['file']['name']);

            return $this->render('settings-app', ['messages' => $this->message, 'user' => $user]);
        }
        return $this->render('settings-app', ['messages' => $this->message, 'user' => $user]);
    }


    //sprawdzenie zdjecia profilowego
    private function validateImage(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }


    public function index()
    {
        return $this->render('home');
    }


//    public function home()
//    {
////        if (!isset($_COOKIE['ID'])) {
////            return $this->render('sign-in');
////
////        }
//
//        $id_user = $_COOKIE['ID'];
////        var_dump($id_user);
////        die();
////        if (!$id_user) {
////            return $this->render('sign-in');
////        }
//        $user = $this->userRepository->getUserById($id_user);
////        var_dump($user);
////        die();
//        $this->render('home-app', ['user' => $user]);
//    }




    public function calculator()
    {
        if (!isset($_COOKIE[$this->nameCookie])) {
            $this->render('sign-in');
        }

        $id_user = $_COOKIE[$this->nameCookie];


        $user = $this->userRepository->getUserById($id_user);

        $this->render('calculator-app', ['user' => $user]);
    }

//    public function settings()
//    {
//        $this->render('settings-app');
//    }

    public function signIn()
    {
        $this->render('sign-in', ['message' => "Hello World"]);
    }

    public function signUp()
    {
        $this->render('sign-up');
    }

    public function previousLogs()
    {
        $this->render('previous-logs-app');
    }

    public function specificWorkout()
    {
        $this->render('specific-workout-app');
    }

//    public function specificProgram()
//    {
//        $this->render('specific-program-app');
//    }

    public function exerciseInWorkout()
    {
        $this->render('exercise-in-workout-app');
    }

    public function addWorkout()
    {
        $this->render('add-workout-to-program-app');
    }

//    public function addProgram()
//    {
//        $this->render('add-program-app');
//    }

    public function addExerciseToWorkout()
    {
        $this->render('add-exercise-to-workout-app');
    }

    public function addExercise()
    {
        $this->render('add-exercise-app');
    }

}