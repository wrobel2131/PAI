<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Program.php';
require_once __DIR__.'/../repository/ProgramRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

class ProgramController extends AppController
{
    private $messages = [];
    private  $programRepository;
    private $nameCookie;
    private $userRepository;


    public function __construct()
    {
        parent::__construct();
        $this->programRepository = new ProgramRepository();
        $this->userRepository = new UserRepository();
        $this->nameCookie = 'user_id_for_cookie';
    }

    public function programs()
    {
        if (!isset($_COOKIE[$this->nameCookie])) {
            $this->render('sign-in');
        }

        $id_user = $_COOKIE[$this->nameCookie];


        $user = $this->userRepository->getUserById($id_user);
        $programs = $this->programRepository->getPrograms();
        $this->render('programs-app', ['programs' => $programs, 'user' => $user]);
    }


    public function addProgram()
    {
        if($this->isPost())
        {
            $program = new Program($_POST['program-name'], $_POST['program-description']);
            $this->programRepository->addProgram($program);
            return $this->render('programs-app', [
                'messages' => $this->messages,
                'programs' => $this->programRepository->getPrograms()
            ]);
        }

        return $this->render('add-program-app', ['messages' => $this->messages]);

    }

//    public function specificProgram()
//    {
//        $this->render('specific-program-app');
//    }





}